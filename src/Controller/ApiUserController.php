<?php

namespace App\Controller;

use App\Document\User;
use App\Form\ApiUserType;
use App\Repository\ApiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;


class ApiUserController extends AbstractController
{
    #[Route('/api_user', name: 'app_api_user', methods: ['GET', 'POST'])]
    public function new(Request $request, ApiRepository $apiRepository): Response
    {
        $apiuser = new User();
        $form = $this->createForm(ApiUserType::class, $apiuser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // URL de l'API
            $apiUrl = 'https://randomuser.me/api/';

            // Création d'une ressource cURL
            $curl = curl_init();

            // Configuration de l'URL et d'autres options cURL
            curl_setopt($curl, CURLOPT_URL, $apiUrl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            // Ajoutez d'autres options cURL si nécessaire, comme des en-têtes ou des données de requête

            // Exécution de la requête cURL
            $response = curl_exec($curl);

            // Vérification des erreurs cURL
            if ($response === false) {
                $error = curl_error($curl);
                // Gérer l'erreur cURL appropriée
            }

            // Fermeture de la session cURL
            curl_close($curl);

            // Traitement de la réponse
            // Vous pouvez maintenant manipuler la réponse de l'API selon vos besoins
            // Par exemple, vous pouvez décoder la réponse JSON en un tableau associatif
            $data = json_decode($response, true);

            if ($data && isset($data['results'])) {
                $results = $data['results'][0];
                    
                // Vérifier si les données nécessaires sont présentes dans la réponse de l'API
                if (isset($results['gender'], $results['email'], $results['picture'], $results['login']['username'], $results['nat'], $results['dob']['age'])) {
                    // Récupérer les valeurs depuis le tableau $results
                    $gender = $results['gender'];
                    $email = $results['email'];
                    $age = $results['dob']['age'];
                    $image = $results['picture']['large'];
                    $username = $results['login']['username'];
                    $language = $results['nat'];

                    // URL de base vers les icônes des drapeaux
                $flagIconsBaseUrl = 'https://www.countryflagicons.com/SHINY/16/';

                // Nom du fichier d'icône basé sur la valeur de $language (par exemple, "DE.png")
                $flagIconFileName = strtoupper($language) . '.png';

                // URL complète vers l'icône du drapeau
                $flagIconUrl = $flagIconsBaseUrl . $flagIconFileName;

                    // Attribuer les valeurs à l'entité User
                    $apiuser->setGender($gender);
                    $apiuser->setEmail($email);
                    $apiuser->setAge($age);
                    $apiuser->setImage($image);
                    $apiuser->setUserName($username);
                    $apiuser->setLanguage($language);
                    $apiuser->setFlagIconUrl($flagIconUrl);
                }
                
                // Récupérer le code postal à partir du formulaire
                $codePostal = $apiuser->getPostalCode();

                // Appeler l'API gouvernementale pour obtenir les informations de la commune
                $apiUrl = "https://geo.api.gouv.fr/communes?codePostal=" . $codePostal ;
                $httpClient = HttpClient::create();
                $response = $httpClient->request('GET', $apiUrl);
                $data = $response->toArray();

                if (!empty($data)) {
                    // Mettre à jour la valeur de city en fonction de la commune trouvée
                    $city = $data[0]['nom'];
                    $apiuser->setCity($city);
                    $apiuser->setPostalCode($codePostal);
                   
                }

                // Sauvegarder l'entité User mise à jour dans la base de données
                $apiRepository->save($apiuser, true);
                
                // Rediriger vers la route 'app_api_user' après la sauvegarde
                return $this->redirectToRoute('app_api_user', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderform('apiuser.html.twig', [
            'apiuser' => $apiuser,
            'form' => $form,
        ]);
    }
}