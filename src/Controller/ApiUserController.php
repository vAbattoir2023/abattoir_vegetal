<?php

namespace App\Controller;
use MongoDB\Client;
use App\Document\User;
use App\Form\ApiUserType;
use App\Repository\ApiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


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
                    
                // Connexion à MongoDB VOIR LE CHEMIN DE CONNEXION
                $client = new Client("mongodb://localhost:27017");

                // Sélection de la base de données VOIR NOM DE BDD
                $database = $client->selectDatabase('abattoir_vegetal');

                // Sélection de la collection
                $collection = $database->selectCollection('User');
            
                
                // if (isset($results['gender'], $results['email'], $results['dob']['age'], $results['picture'], $results['login']['username'],$results['nat'])) {
                //     $apiuser->setGender($results['gender']);
                //     $apiuser->setEmail($results['email']);
                //     $apiuser->setAge($results['dob']['age']);
                //     $apiuser->setImage($results['picture']['large']);
                //     $apiuser->setUserName($results['login']['username']);
                //     $apiuser->setLanguage($results['nat']);
                
                if (isset($results['gender'],$results['email'],$results['picture'],$results['login']['username'],$results['nat'],$results['dob']['age'])) {
                // , , )
                    // Récupérer la valeur du genre depuis le tableau $results
                    $gender = $results['gender'];
                    $email = $results['email'];
                    $age = $results['dob']['age'];
                    $image = $results['picture']['large'];
                    $username = $results['login']['username'];
                    $language = $results['nat'];

                    // Attribuer la valeur du genre à la propriété $gender de l'entité User
                    $apiuser->setGender($gender);
                    $apiuser->setEmail($email);
                    $apiuser->setAge($age);
                    $apiuser->setImage($image);
                    $apiuser->setUserName($username);
                    $apiuser->setLanguage($language);
                // }
                // var_dump($results); 
                
                }
                // var_dump($apiuser);
                $apiRepository->save($apiuser, true);
            }
            return $this->redirectToRoute('app_api_user', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderform('apiuser.html.twig', [
            'apiuser' => $apiuser,
            'form' => $form,
        ]);
     }
 }

