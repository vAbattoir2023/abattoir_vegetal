<?php

namespace App\Controller;

use App\Document\Group;
use App\Document\Guest;
use App\Document\Reservation;
use App\Document\User;
use App\Document\UserInvitation;
use App\Repository\GroupRepository;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ODM\MongoDB\DocumentManager;
use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/group')]
class GroupController extends AbstractController
{

    #[Route('/select_group', name: 'app_select_group')]
    public function select_group(UserRepository $userRepository): Response
    {
        // data checkbox
        $dataCheckbox = [
            'Animaux',
            'Environnement',
            'Art et culture',
            'Sport',
            'Voyages',
            'Musique',
            'Danse',
            'Sciences',
            'Bien-être',
            'Food',
            'Activités sociales',
            'Jeux vidéos',
        ];
        
        // all useres from bdd
        $allUser = $userRepository->findAllFromBdd();

        return $this->render('Group/index.html.twig',[
            'dataFormCheckbox' => $dataCheckbox,
            'allUsers' => $allUser
        ]);
    }


    #[Route('/users-list/{filters}', name: 'app_get_users_list_from_filters')]
    public function showUsersList(string $filters, DocumentManager $dm): Response{

        $users = []; // initialise array user
        $filters = explode('#', $filters); // get center of interest from url
        
        $iter = $dm->createQueryBuilder() // create requête sql 
            ->find(User::class) // find all document from collection user
            ->field('centerOfInterest')->all($filters) // filter centerOfInterest same $filters
            ->getQuery() // prepare request
            ->execute(); // execute request

        $users = []; // initialise array user

        // while data $iter is valid
        while($iter->valid()) {
            $users[] = $iter->current(); // adds data step by step
            $iter->next(); // add next data
        }

        return $this->render('Group/usersList.html.twig',[
            'users' => $users
        ]);
    }

    #[Route('/users-list/', name: 'app_get_users_list_without_filters')]
    public function showUsersListFull(DocumentManager $dm): Response{
        $users = [];
        
        $iter = $dm->createQueryBuilder()
            ->find(User::class)
            ->getQuery()
            ->execute();

        $users = [];
        while($iter->valid()) {
            $users[] = $iter->current();
            $iter->next();
        }

        return $this->render('Group/usersList.html.twig',[
            'users' => $users
        ]);
    }

    #[Route('/add', name: 'app_add_group')]
    public function addGroup(DocumentManager $dm, GroupRepository $groupRepository, UserRepository $userRepository): void{

        
        $group = new Group();
        $guest = new Guest();
        $user = new User();

        // $listId = explode('#', $lisId); // get center of interest from url

        //test
        $listId=[
            '64b7fa3260ce6c146604e5a2',
            '64b7fa6860ce6c146604e5a3',
            '64b7fa8260ce6c146604e5a4',
        ];

        $status = 'waiting'; // status
        $group->setStatus($status);

        $authors = 'Anthony';
        $group->setAuthors($authors);

        $creationGroup = date("Y-m-d"); // date de creation
        $group->setCreateGroup($creationGroup);
        $group->setReservationDate($creationGroup);

        foreach($listId as $id){
            $guest->setGuest($userRepository->findUserById($id));
            $guest->setInvitation(false);
            $group->addGuest($guest);
        }
            $groupRepository->save($group);
            dd('good',$group);
    }
}
