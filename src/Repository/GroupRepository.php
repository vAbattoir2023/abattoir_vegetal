<?php 

namespace App\Repository;

use App\Document\Group;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Repository\DocumentRepository;
use MongoDB\BSON\ObjectId;

class GroupRepository extends ServiceDocumentRepository 
{

    public function __construct(ManagerRegistry $registery)
    {
        parent::__construct($registery, Group::class);
    }

    public function save(Group $group): void 
    {
            $this->getDocumentManager()->persist($group);
            $this->getDocumentManager()->flush();
    }

    public function findGroupsById(string $id):array
    {

        return $this->findBy([ 'id' => $id ]);
    }
    public function findAllGrpFromBdd() : array 
    {
        return $this->findAll();
    }

    public function removeByDocument(object $group) : void
    {
        $this->getDocumentManager()->remove($group);
        $this->getDocumentManager()->flush();
    }

    public function findGuestById(string $idSession, string $response) : array 
    {
        return $this->findBy([
            'status' => "waiting",
            'guests' => [
                '$elemMatch' => [
                    'invitation' => "$response",
                    'guest.$id' => new ObjectId($idSession),
                ]
            ]
        ]);
    }

    public function findReadyGroup(string $idSession): array
    {
        return $this->findBy([
            'status' => "waiting",
            'guests' => [
                '$elemMatch' => [
                    'guest.$id' => new ObjectId($idSession),
                    'invitation' => "accept",
                ],
                '$not' => [
                    '$elemMatch' => [
                        'invitation' => "waiting",
                    ],
                ],
            ],
        ]);
    }
}