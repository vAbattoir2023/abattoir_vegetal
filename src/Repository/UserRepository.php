<?php 

namespace App\Repository;

use App\Document\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;

class UserRepository extends ServiceDocumentRepository 
{

    // bool $flush = false, DocumentManager $dm


    public function __construct(ManagerRegistry $registery)
    {
        parent::__construct($registery, User::class);
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

    // public function remove(User $entity, bool $flush = false): void
    // {
    //     $this->getEntityManager()->remove($entity);

    //     if ($flush) {
    //         $this->getEntityManager()->flush();
    //     }
    // }
} 