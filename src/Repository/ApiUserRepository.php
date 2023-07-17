<?php

// src/Service/UserApiService.php

namespace App\Repository;

use Symfony\Component\HttpClient\HttpClient;
use Doctrine\ODM\MongoDB\DocumentManager;
use App\Document\User;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;

class UserApiRepository extends ServiceDocumentRepository 
{
    public $apiUrl;
    public $documentManager;

    public function __construct(string $apiUrl, DocumentManager $documentManager)
    {
        $this->apiUrl = $apiUrl;
        $this->documentManager = $documentManager;
    }

    public function save($user): void
    {
            $this->getDocumentManager()->persist($user);
            $this->getDocumentManager()->flush();
    }

    public function findAllFromBdd() : array 
    {
        return $this->findAll();
    }

    public function findById($userID) : array 
    {
        return $this->findBy([ 'id' => $userID ]);
    }
}
// foreach ($results as $result) {
//         if (isset($result['gender'], $result['email'], $result['dob'], $result['picture'], $result['login']['username'])) {
//             $gender = $result['gender'];
//             $email = $result['email'];
//             $dob = $result['dob']['date'];
//             $image = $result['image']['large'];
//             $username = $result['login']['username'];
//             $langage = $result['nat'];

//             // Création du document à insérer
//             $document = [
//                 'gender' => $gender,
//                 'email' => $email,
//                 'dob' => $dob,
//                 'image' => $image,
//                 'username' => $username,
//                 'langage' => $langage,
//                 'job' => $job,
//                 'city' => $city,
//                 'diet' => $diet,
//                 'allergy' => $allergy,
//                 'description' => $description
//             ];