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
    public function select_group(UserRepository $userRepository, SessionInterface $sessionInterface): Response
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

        //Matth Montre les centres d'interets du l'user dans le filtre
         // get id user from session
         $idSession = $sessionInterface->get('id');
        $userFromBdd = $userRepository->findUserById($idSession);

        return $this->render('Group/index.html.twig',[
            'dataFormCheckbox' => $dataCheckbox,
            'allUsers' => $allUser,
            'userFromBdd' => $userFromBdd
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
    public function addGroup(GroupRepository $groupRepository, UserRepository $userRepository, string $idUsers, SessionInterface $session): Response
    {


        $group = new Group();
        $user = new User();

        $listIdUser = explode(',', $idUsers); // get center of interest from url


        //dd($listIdUser);
        $status = 'waiting'; // status
        $group->setStatus($status);

        $userById = $userRepository->findUserById($session->get('id'));

        $authors = $userById->username;
        $group->setAuthors($authors);

        $creationGroup = new DateTime(); // date de creation
        
        $group->setCreateGroup($creationGroup);
        // $group->setReservationDate($creationGroup);

        foreach($listIdUser as $id){
            $guest = new Guest();
            $guest->setGuest($userRepository->findUserById($id));
            $guest->setInvitation('waiting');
            $group->addGuest($guest);

        }
        $groupRepository->save($group);

            return $this->redirectToRoute('app_home');
    }

    #[Route('/accept', name: 'accept_Invitation')]
    public function acceptInvitation(GroupRepository $groupRepository, UserRepository $userRepository, SessionInterface $session, DocumentManager $dm): Response{

        
        $idGroup = '64bc6cef03431fac6d0010a0';

      // Get the currently logged-in user ID from the session
    $currentUserId = $session->get('id');

    // Find the group document by its ID
    $group = $groupRepository->findOneBy(['id' => $idGroup]);

    // Get the guests from the group document
    $guests = $group->getGuests();

    // Iterate through the guests and update the invitation status for the matching user
    foreach ($guests as $guest) {
        // Assuming you have a "getId" method in the User entity to get the user's ID
        $guestUserId = $guest->getGuest()->getId();

        if ($guestUserId === $currentUserId) {
            $guest->setInvitation('waiting accepted');
            break; // Stop iterating after updating the matching guest
        }
    }

    // Save the updated group document back to the database
    $dm->flush();
        return $this->redirectToRoute('app_home');


    }
            // modifie le document

    #[Route('/resa', name: 'app_get_resa')]
    public function resa(DocumentManager $dm): Response{
        

        return $this->render('Group/resa.html.twig',[

        ]);
    }
    #[Route('/resaDate', name: 'app_resa_date')]
    public function resaDate(DocumentManager $dm): Response{
        

        return $this->render('Group/date.html.twig',[

        ]);
    }
}
