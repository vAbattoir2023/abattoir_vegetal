<?php

namespace App\Controller;

use App\Document\Group;
use App\Document\Guest;
use App\Document\Reservation;
use App\Document\User;
use App\Document\UserInvitation;
use App\Form\ResaType;
use App\Repository\GroupRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types\TimeType as TypesTimeType;
use Doctrine\ODM\MongoDB\DocumentManager;
use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use MongoDB\BSON\ObjectId;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

#[Route('/group')]
class GroupController extends AbstractController
{

    #[Route('/select_group', name: 'app_select_group')]
    public function select_group(GroupRepository $groupRepository,UserRepository $userRepository, SessionInterface $sessionInterface,  Request $request , DocumentManager $dm ): Response
    {

        $group = new Group();

        // if id user is undifined, return to login
        if(empty($sessionInterface->get('id'))){
            return $this->redirectToRoute('app_login');
        }

        $idSession = $sessionInterface->get('id');

        $form = $this->createForm(ResaType::class, $group); // create form for document user
        $form->handleRequest($request); // get form data

        $dataCheckbox = [
            'Animaux',
            'Environnement',
            'Art et Culture',
            'Sport',
            'Voyage',
            'Musique',
            'Danse',
            'Sciences',
            'Bien-etre',
            'Food',
            'Activités sociales',
            'Jeux vidéos',
        ];
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

        return $this->render('Group/index.html.twig',[
            'dataFormCheckbox' => $dataCheckbox,
            'users' => $users,
            'DateRegister' => $form->createView(), //send the form
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
    // CREATE GROUP
    #[Route('/add/{idUsers}/{date}', name: 'app_add_group')]
    public function addGroup(GroupRepository $groupRepository,  UserRepository $userRepository, string $idUsers, string $date, SessionInterface $session,  Request $request ): Response
    {
        $group = new Group();   // instancie class Group
        $user = new User();     // instancie class User
     
        $listIdUser = explode(',', $idUsers); // stores user IDs in an array

        $dateSelected = DateTime::createFromFormat('Y-m-d', $date);     // initialise value dateSelected
        $dateSelected->modify('+2 hours');                              // update value dateSelected       
        $group->setReservationDate($dateSelected);                      // set group->ReservationDate value

        $status = 'waiting';           // initialise value status
        $group->setStatus($status);    // set group->status value

        $userById = $userRepository->findUserById($session->get('id'));     // get user by ID frm BDD
        $authors = $userById->username;                                     // initialise value authors
        $group->setAuthors($authors);                                       // set group->authors value

        $dateToday = new DateTime();            // initialise value date Create Group Date
        $dateToday->modify('+2 hours');         // update value date Create Group Date
        $group->setCreateGroupDate($dateToday); // set group->CreateGroupDate value

        foreach($listIdUser as $id){
            $guest = new Guest();                       // instancie class Guest
            $user = $userRepository->findUserById($id); // get guest users
            $guest->setGuest($user);                    // set Group->user foreign key for guest users
            $guest->setUsername($user->getUsername());  // set the username for the guest
            $guest->setInvitation('waiting');           // set the default value of invitations on waiting
            $group->addGuest($guest);                   // add Guest Class to Group Class
        }
       
        $groupRepository->save($group);                 // POST the Group document to BDD

        return $this->redirectToRoute('app_home');      // redirect to home route
    }

    // FILTER USER FOR CENTER OF INTEREST
    #[Route('/users-list/{filters}', name: 'app_get_users_list_from_filters')]
    public function showUsersList(string $filters, DocumentManager $dm): Response{

        $users = []; // initialise array user
        $filters = explode(',', $filters); // get center of interest from url
        
        $iter = $dm->createQueryBuilder()               // create requête sql 
            ->find(User::class)                         // find all document from collection user
            ->field('centerOfInterest')->in($filters)   // filter centerOfInterest same $filters
            ->getQuery()                                // prepare request
            ->execute();                                // execute request

        $users = []; // initialise array user

        // while data $iter is valid
        while($iter->valid()) {
            $users[] = $iter->current(); // adds data step by step
            $iter->next();               // add next data
        }

        return $this->render('Group/usersList.html.twig',[
            'users' => $users
        ]);
    }

    // INVITATION
    #[Route('/accept/{id}/{bool}', name: 'accept_Invitation')]
    public function acceptInvitation($id, $bool,GroupRepository $groupRepository, UserRepository $userRepository, SessionInterface $session, DocumentManager $dm): Response
    {
        $idGroup = $id; // Replace $groupId with the ID you want to find

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
                $bool == 'true' && $guest->setInvitation('accept');
                $bool == 'false' && $guest->setInvitation('refuse');
                break; // Stop iterating after updating the matching guest
            }
        }

        // Save the updated group document back to the database
        $dm->flush();
        return $this->redirectToRoute('app_home');
    }

    #[Route('/invitation', name: 'app_invitation')]
    public function invitation(SessionInterface $sessionInterface, GroupRepository $groupRepository, DocumentManager $dm): Response
    {

        $idSession = $sessionInterface->get('id');
        //dd(new ObjectId($idSession));

        //appelle dans group ton id dans guest
        $notifInvitation = ($groupRepository->findBy([
            'status' => "waiting",
            'guests' => [
                '$elemMatch' => [
                    'invitation' => "waiting",
                    'guest.$id' => new ObjectId($idSession),
                ]
            ]
        ]));
        
        return $this->json(['notifications' => $notifInvitation]);
    }
}