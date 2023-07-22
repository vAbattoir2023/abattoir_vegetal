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
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use MongoDB\BSON\ObjectId;

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

    #[Route('/add/{idUsers}', name: 'app_add_group')]
    public function addGroup(GroupRepository $groupRepository, UserRepository $userRepository, string $idUsers, SessionInterface $session): Response{


        $group = new Group();
        $user = new User();

        $listIdUser = explode(',', $idUsers); // get center of interest from url


        //dd($listIdUser);
        $status = 'waiting'; // status
        $group->setStatus($status);

        $userById = $userRepository->findUserById($session->get('id'));

        $authors = $userById->username;
        $group->setAuthors($authors);

        $creationGroup = date("Y-m-d"); // date de creation
        $group->setCreateGroup($creationGroup);
        $group->setReservationDate($creationGroup);

        foreach($listIdUser as $id){
            $guest = new Guest();
            $guest->setGuest($userRepository->findUserById($id));
            $guest->setInvitation(false);
            $group->addGuest($guest);

        }
        $groupRepository->save($group);

            return $this->redirectToRoute('app_home');
    }

    #[Route('/accept', name: 'accept_Invitation')]
    public function acceptInvitation(GroupRepository $groupRepository, UserRepository $userRepository, SessionInterface $session): Response{

        $group = new Group();

        //recupere le document
        $idSession = $session->get('id');
        //dd(new ObjectId($idSession));

        //appelle dans group ton id dans guest
        $notifInvitation = ($groupRepository->findBy([
            'status' => "waiting",
            'guests.invitation' => false,
            'guests.guest.$id' => new ObjectId($idSession),
        ]));
    
        // $group = $notifInvitation;
        
        dd($notifInvitation[1]->guests);

        foreach($notifInvitation as $invitation){
            $guest = new Guest();

            $guest->setGuest($userRepository->findUserById($invitation));
            $guest->setInvitation(true);
            $group->addGuest($guest);
        }

        // modifie le document

    }
}
