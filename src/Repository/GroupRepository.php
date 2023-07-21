<?php 

namespace App\Repository;

use App\Document\Group;
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
        parent::__construct($registery, Group::class);
    }

    public function save(Group $group): void
    {
            $this->getDocumentManager()->persist($group);
            $this->getDocumentManager()->flush();
    }
}