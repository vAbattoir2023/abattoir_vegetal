<?php

namespace App\Controller;

use App\Document\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserApiRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\HttpClient\HttpClient;
use Doctrine\ODM\MongoDB\DocumentManagerInterface;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;


class UserApiController extends AbstractController

{  
    // public $documentManager;

    // public function __construct(DocumentManagerInterface $documentManager)
    // {
    //     $this->documentManager = $documentManager;
    // }
    #[Route('/user_api', name: 'app_user_api', methods: ['GET'])]
    public function syncUsers(): Response
    {
        // Récupérer les données depuis l'API
        $apiUrl = 'https://randomuser.me/api/?results=10'; // Vous pouvez ajuster le nombre de résultats ici
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', $apiUrl);
        $data = $response->toArray();

        // Vérifier la réponse de l'API
        if (!$data || !isset($data['results'])) {
            return new Response('Erreur lors de la récupération des utilisateurs depuis l\'API.');
        }

        // Récupérer les résultats
        $results = $data['results'];

         // Demander une saisie utilisateur pour les variables $job, $city, etc.
         $job = readline('Entrez le job : ');
         $city = readline('Entrez le city : ');
         $diet = readline('Entrez le diet : ');
         $allergy = readline('Entrez l\'allergy : ');
         $description = readline('Entrez la description : ');

        // Parcourir les résultats et créer des documents User
        foreach ($results as $result) {
            if (isset(
                $result['gender'],
                $result['email'],
                $result['dob']['date'],
                $result['image']['large'],
                $result['login']['username'],
                $result['nat']
            )) {
                $user = new User();
                $user->setGender($result['gender']);
                $user->setEmail($result['email']);
                // $user->setDateOfBirth(new \DateTime($result['dob']['date']));
                $user->setImage($result['image']['large']);
                $user->setUsername($result['login']['username']);
                $user->setLanguage($result['nat']);

                // Définir d'autres propriétés de l'entité User selon vos besoins.
                $user->setJob($job);
                $user->setCity($city);
                $user->setDiet($diet);
                $user->setAllergy($allergy);
                $user->setDescription($description);

                // Insérer le document User dans MongoDB
                //$this->documentManager->persist($user);
            }
        }

        // Sauvegarder les documents dans la base de données MongoDB
        //$this->documentManager->flush();

        return new Response('Les utilisateurs ont été synchronisés avec succès depuis l\'API.');
    }
}