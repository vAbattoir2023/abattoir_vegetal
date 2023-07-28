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

#[Route('/user_profil')]
class UserProfilController extends AbstractController
{

    /**
     * Route vers le profil utilisateur
     *
     * @param UserRepository $userRepository
     * @param SessionInterface $sessionInterface
     * @return Response
     */
    #[Route('/', name: 'app_user_profil_success')]
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
    
    /**
     * Route vers le profil utilisateur (en mode edition)
     *
     * @param Request $request
     * @param UserRepository $userRepository
     * @param DocumentManager $documentManager
     * @param SessionInterface $sessionInterface
     * @return Response
     */
    #[Route('/edit', name: 'app_user_profil')]
    public function index(Request $request, UserRepository $userRepository, DocumentManager $documentManager, SessionInterface $sessionInterface): Response
    {

        $user  = new User();
        
        // get id user from session
        $idSession = $sessionInterface->get('id');

        if(!$idSession){
            return $this->redirectToRoute('app_home');
        }
        // gey user by id session 
        $user = $userRepository->findUserById($idSession);
        
        // if not user then redirect to app_register
        if (!$user) {
            return $this->redirectToRoute('app_register');
        }
        //  dd($userFromBdd);
        // create form for the database
        $form = $this->createForm(UserType::class, $user);
        // get the data from form
        $form->handleRequest($request);

        // if data from form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {

            $selectedLanguages = $form->get('language')->getData();
            $flagIconUrl = [];
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
            } else {
                echo 'false';
            }
             // Récupérer le code postal à partir du formulaire
             $codePostal = $user->getPostalCode();
             $codeDepartement = $user->getCodeDepartement();
 
             // URL de base vers l'API gouvernementale pour obtenir les informations de la commune à partir d'un code postal
             $apiUrl = "https://geo.api.gouv.fr/communes?codePostal=" . $codePostal;
            
             $httpClient = HttpClient::create();
             // Effectuer une requête HTTP GET vers l'API en utilisant l'URL construite
             $response = $httpClient->request('GET', $apiUrl);
             $data = $response->toArray();
 
             if (!empty($data)) {
                 // Mettre à jour la valeur de city en fonction de la commune trouvée
                 $city = $data[0]['nom'];
                 // Attribuer les valeurs au document USER                
                 $user->setCity($city);
                 $user->setPostalCode($codePostal);
                 // Récupérer le code du département à partir des données du codeDepartement de l'API
                 $codeDepartement = $data[0]['codeDepartement'];
                 // Attribuer les valeurs au document USER
                 $user->setCodeDepartement($codeDepartement);
                
             }
             // Récupérer le code du département à partir des données de la commune
             $codeDepartement = $user->getCodeDepartement();
 
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
                     // Mettre à jour la valeur de region en fonction du nom de la région trouvée
                     $region = $data['nom'];
                     // Attribuer la valeur au document USER
                     $user->setRegion($region);
                 }
             }

            //update the data to user in database
            $userRepository->save($user, true);
            // Redirect to success page
            return $this->redirectToRoute('app_user_profil_success');
        }

       return $this->render('user_profil/edit.html.twig', [
            // send form for database
             'UserForm' => $form->createView(),
        ]); 
        return new Response('test');
    }


}