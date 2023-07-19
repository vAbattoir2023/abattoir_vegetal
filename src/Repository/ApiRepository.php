<?php

namespace App\Repository;

use App\Document\User;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;

class ApiRepository extends ServiceDocumentRepository 
{

    public function __construct(ManagerRegistry $registery)
    {
        parent::__construct($registery, User::class);
    }

    public function save($user): void
    {
        $this->getDocumentManager()->persist($user);
        $this->getDocumentManager()->flush();
    }

    public function findAllFromBdd(): array
    {
        return $this->findAll();
    }

    public function findById($userID): array
    {
        return $this->findBy(['id' => $userID]);
    }

/*     public function updateCity(User $user, string $codePostal): void
    {
        // Vérifier si l'utilisateur a déjà une ville définie
        if ($user->getCity()) {
            // Si la ville est déjà définie, ne pas effectuer d'appel à l'API pour éviter de mettre à jour une valeur existante
            return;
        }

        // Vérifier si le code postal est vide
        if (!$codePostal) {
            // Si le code postal est vide, ne pas effectuer d'appel à l'API car il n'y a pas d'information pour trouver la ville
            return;
        }
    } */
}