<?php

namespace App\Controller;

use App\Document\User;
use App\Form\ApiUserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class ApiUserController extends AbstractController
{

    #[Route('/api_user', name: 'app_api_user', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository): Response
    {
        // Instanciation de la class USER
        $apiuser = new User();
        // Création d'un tableau avec les valeurs de la variable $apiuser
        $form = $this->createForm(ApiUserType::class, $apiuser);
        // La fonction handleRequest permet de gérer le traitement de la saisie du formulaire
        $form->handleRequest($request);
        // Cette conditionpermet de savoir SI le formulaire a été saisi et SI de plus les règles de validations sont vérifiées
        if ($form->isSubmitted() && $form->isValid()) {
            $selectedLanguages = $form->get('language')->getData();
            $flagIconUrl = [];
            if (is_array($selectedLanguages)) {
                // Définir la valeur de la propriété "language"
                $apiuser->setLanguage($selectedLanguages);
                // URL de base vers l'API des icônes des drapeaux
                $flagIconsBaseUrl = 'https://www.countryflagicons.com/SHINY/16/';

                foreach ($selectedLanguages as $languageCode) {
                    $languageCodeUpper = strtoupper($languageCode);
                    // SI le drapeau correspondant existe dans le tableau $languageFlags
                    if (isset($languageCodeUpper)) {
                        $flagIconUrl[] = $flagIconsBaseUrl . $languageCodeUpper . '.png';
                    } else {
                        // SINON le drapeau pour une langue n'est pas disponible, vous pouvez définir une URL générique ou une URL par défaut
                        echo'  le drapeau pour une langue n\'est pas disponible  ';
                    }
                }
                $apiuser->setFlagIconUrl($flagIconUrl);
            } else {
                echo '  vide  ';
            }
            // URL de l'API
            $apiUrl = 'https://randomuser.me/api/';

            // Création d'une ressource cURL
            $curl = curl_init();

            // Configuration de l'URL et d'autres options cURL
            curl_setopt($curl, CURLOPT_URL, $apiUrl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // Exécution de la requête cURL
            $response = curl_exec($curl);

            // Vérification des erreurs cURL
            if ($response === false) {
                $error = curl_error($curl);
                // Gérer l'erreur cURL appropriée
                echo "Erreur cURL : " . $error;
            }

            // Fermeture de la session cURL
            curl_close($curl);

            // Traitement de la réponse JSON en un tableau associatif
            $data = json_decode($response, true);
            //SI la variable $data est définie et SI $data contient le tableau 'results'
            if ($data && isset($data['results'])) {
                // ALORS intancie la variable $results au premier élément du tableau 'results'  
                $results = $data['results'][0];
                    
                // Vérifier SI les données sont présentes dans la réponse de l'API
                if (isset($results['gender'], $results['email'], $results['picture'], $results['login']['username'], $results['dob']['age'])) {
    
                    // Récupérer les valeurs depuis le tableau $results
                    $gender = $results['gender'];
                    $email = $results['email'];
                    $age = $results['dob']['age'];
                    $image = $results['picture']['large'];
                    $username = $results['login']['username'];

                    // Attribuer les valeurs au document USER
                    $apiuser->setGender($gender);
                    $apiuser->setEmail($email);
                    $apiuser->setAge($age);
                    $apiuser->setImage($image);
                    $apiuser->setUserName($username);
                }
                
                // Récupérer le code postal à partir du formulaire
                $codePostal = $apiuser->getPostalCode();

                // URL de base vers l'API gouvernementale pour obtenir les informations de la commune à partir d'un code postal
                $apiUrl = "https://geo.api.gouv.fr/communes?codePostal=" . $codePostal ;
                // Création d'un client HTTP dans la variable $hyypClient à l'aide de HttpClient::create()
                $httpClient = HttpClient::create();
                // Effectuer une requête HTTP GET vers l'API en utilisant l'URL construite 
                $response = $httpClient->request('GET', $apiUrl);
                $data = $response->toArray();

                if (!empty($data)) {
                    // Mettre à jour la valeur de city en fonction de la commune trouvée
                    $city = $data[0]['nom'];
                    // Attribuer les valeurs au document USER
                    $apiuser->setCity($city);
                    $apiuser->setPostalCode($codePostal);
                   
                }
                // A DECOMMENTER POUR ENREGISTRER EN BDD !!
                // Sauvegarder l'entité User mise à jour dans la base de données
                $userRepository->save($apiuser, true);
                
                // Rediriger vers la route 'app_api_user' après la sauvegarde
                return $this->redirectToRoute('app_api_user', [], Response::HTTP_SEE_OTHER);
            }
        }
        // Retourne le rendu du formulaire (apiuser.html.twig) au format HTML
        // avec les données de ApiUser de la variable $apiuser et les valeurs attribuer à $form
        return $this->renderform('Admin/apiuser.html.twig', [
            'apiuser' => $apiuser,
            'form' => $form,
        ]);
    }
}
