<?php

namespace App\Controller;

use App\Document\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

use Cloudinary\Configuration\Configuration;

// Configuration::instance([
//     'cloud' => [
//         'cloud_name' => $_ENV['CLOUDINARY_CLOUD_NAME'], 
//         'api_key' => $_ENV['CLOUDINARY_API_KEY'], 
//         'api_secret' => $_ENV['CLOUDINARY_API_SECRET']
//     ],
//     'url' => [
//         'secure' => true
//     ]
// ]);

#[Route('/user_profil')]
class UserProfilController extends AbstractController
{
    #[Route('/edit', name: 'app_user_profil')]
    public function index(Request $request, UserRepository $userRepository, DocumentManager $documentManager, SessionInterface $sessionInterface): Response
    {

        $user  = new User();                                    // instancie user document
        
        $idSession = $sessionInterface->get('id');              // get id user from session

        if(!$idSession) return $this->redirectToRoute('app_home'); // if idSession is undifined, then redirect to app_home
        
        $user = $userRepository->findUserById($idSession);      // get user by id session 
        
        if (!$user) return $this->redirectToRoute('app_register');  // if user is undifined then redirect to app_register

        $form = $this->createForm(UserType::class, $user);      // create a form
        
        $form->handleRequest($request);                         // get the form datas

        $flagIconUrl = [];                                     // initialise flag array

        // if data form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            

            //////////////////////////////////////////////////////////////////////////////////// STEP DRAPEAU LANGAGE
            $selectedLanguages = $form->get('language')->getData();
            
            if (is_array($selectedLanguages)) {
                // Définir la valeur de la propriété "language"
                $user->setLanguage($selectedLanguages);    
                // URL de base vers l'API des icônes des drapeaux
                $flagIconsBaseUrl = 'https://www.countryflagicons.com/SHINY/32/';
                
                foreach ($selectedLanguages as $languageCode) {
                    // SI le drapeau correspondant existe dans le tableau $languageFlags
                    if (isset($languageCode)) {
                        $flagIconUrl[] = $flagIconsBaseUrl . $languageCode . '.png';
                    } else {
                        // SINON le drapeau pour une langue n'est pas disponible, vous pouvez définir une URL générique ou une URL par défaut
                        $flagIconUrl[] = $flagIconsBaseUrl . 'unknown.png';
                    }
                }
                $user->setFlagIconUrl($flagIconUrl);
            }
            //////////////////////////////////////////////////////////////////////////////////// STEP POSTAL CODE

             // Récupérer le code postal à partir du formulaire
             $codePostal = $user->getPostalCode();
             $codeDepartement = $user->getCodeDepartement();
 
             // URL de base vers l'API gouvernementale pour obtenir les informations de la commune à partir d'un code postal
             $apiUrl = "https://geo.api.gouv.fr/communes?codePostal=" . $codePostal;
            
             $httpClient = HttpClient::create();
             // Effectuer une requête HTTP GET vers l'API en utilisant l'URL construite
             $response = $httpClient->request('GET', $apiUrl);
             $data = $response->toArray();
 
            // if data 
             if (!empty($data)) {
                 $city = $data[0]['nom'];                   // Mettre à jour la valeur de city en fonction de la commune trouvée              
                 $user->setCity($city);                     // Attribuer les valeurs au document USER  
                 $user->setPostalCode($codePostal);
                 $codeDepartement = $data[0]['codeDepartement']; // Récupérer le code du département à partir des données du codeDepartement de l'API
                 $user->setCodeDepartement($codeDepartement);    // Attribuer les valeurs au document USER
             }
             
            $codeDepartement = $user->getCodeDepartement();    // Récupérer le code du département à partir des données de la commune
 
            // URL de base vers l'API gouvernementale pour obtenir les informations du département à partir du code du département
            $apiUrl = "https://geo.api.gouv.fr/departements/" . $codeDepartement;
 
            // Effectuer une requête HTTP GET vers l'API en utilisant l'URL construite
            $response = $httpClient->request('GET', $apiUrl);
            $data = $response->toArray();
 
            if (!empty($data)) {
                 // Récupérer le nom du département à partir de la réponse de l'API
                
                 $codeRegion = $data['codeRegion'];
                  // Utiliser le nom du département pour récupérer le nom de la région
                 $apiUrl = "https://geo.api.gouv.fr/regions/" . $codeRegion;
                 // Effectuer une requête HTTP GET vers l'API en utilisant l'URL construite
                 $response = $httpClient->request('GET', $apiUrl);
                 $data = $response->toArray();
 
                 if (!empty($data)) {
                    $region = $data['nom'];      // Mettre à jour la valeur de region en fonction du nom de la région trouvée
                    $user->setRegion($region);   // Attribuer la valeur au document USER
                }
            }

            //update the data to user in database
            $userRepository->save($user, true);
            // Redirect to success page
            return $this->redirectToRoute('app_user_profil_success');
        }

       return $this->render('user_profil/index.html.twig', [
            // send form for database
             'UserForm' => $form->createView(),
        ]); 
        return new Response('test');
    }

    #[Route('/profil', name: 'app_user_profil_success')]
    public function success( UserRepository $userRepository, SessionInterface $sessionInterface): Response
    {
        // get id user from session
        $idSession = $sessionInterface->get('id');

        if(!$idSession){
            return $this->redirectToRoute('app_home');
        }

        // get document user from database
        $userFromBdd = $userRepository->findUserById($idSession);

        return $this->render('user_profil/profil.html.twig', [
            // send data user from database
            'user' => $userFromBdd,
        ]);
    }
}