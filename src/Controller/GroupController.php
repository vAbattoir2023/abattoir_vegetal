<?php

namespace App\Controller;

use App\Document\Group;
use App\Document\Reservation;
use App\Document\User;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
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

    #[Route('/add/{lisId}', name: 'app_add_group')]
    public function addGroup(DocumentManager $dm, string $lisId): Response{

        
        $group = new Group();
        $user = new User();

        $listId = explode('#', $lisId); // get center of interest from url
        dd($listId);

        $status = 'waiting'; // status

        $username = $user->getUserName(); // username

        $creationGroup = date("Y-m-d"); // date de creation

        //reservation date selectionné
        // from input

        // id user from add to objt { user:'id', invitation:false  }

        $usersInviation = [];

        
        $userList = [];

        foreach($listId as $id){
            $userList['user'] = $id;
            $userList['invitations'] = false;
        }

        //list user invité
        $userList;
        if(isset($userList) && isset($creationGroup) && isset($username) && isset($status)){

            //set data document
            
            // GroupRepository->save();
        }

        return $this->render('Group/usersList.html.twig',[

        ]);
    }
}
