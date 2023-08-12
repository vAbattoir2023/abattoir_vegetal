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

}