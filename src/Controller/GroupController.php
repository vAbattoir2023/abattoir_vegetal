<?php

namespace App\Controller;

use App\Document\Group;
use App\Document\Guest;
use App\Document\User;
use App\Form\ResaType;
use App\Repository\GroupRepository;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use MongoDB\BSON\ObjectId;
use Symfony\Component\HttpFoundation\Request;



#[Route('/group')]
class GroupController extends AbstractController
{
    /**
     * Route d'affichage de la selection d'amis
     *
     * @param GroupRepository $groupRepository
     * @param UserRepository $userRepository
     * @param SessionInterface $sessionInterface
     * @param Request $request
     * @param DocumentManager $dm
     * @return Response
     */
    #[Route('/select_group', name: 'app_select_group')]
    public function select_group(GroupRepository $groupRepository,UserRepository $userRepository, SessionInterface $sessionInterface,  Request $request , DocumentManager $dm ): Response
    {

        // vérifier que le user est bien connecté
        if(!$sessionInterface->get('id')){
            return $this->redirectToRoute('app_login');
        }

        $group = new Group();

        $form = $this->createForm(ResaType::class, $group); // create form for document user
        $form->handleRequest($request); // get form data

        if(!empty($notifInvitation[0])){
            if ($form->isSubmitted() && $form->isValid()) {
                // Persist the group data to the database
                $groupRepository->save($group);

                // Redirect or show a success message
            }
            // data checkbox
        }

        $interests = [
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
        
        // all useres from bdd
        $allUser = $userRepository->findAllFromBdd();

        //Matth Montre les centres d'interets du l'user dans le filtre
        // get id user from session
        $idSession = $sessionInterface->get('id');
        $userFromBdd = $userRepository->findUserById($idSession);

        return $this->render('Group/index.html.twig',[
            'interests' => $interests,
            'allUsers' => $allUser,
            'userFromBdd' => $userFromBdd,
            'DateRegister' => $form->createView(), //send the form

        ]);
    }


    
    /**
     * Route qui génère la liste des amis, en fonction des filtres spécifiés
     *
     * @param string $filters
     * @param DocumentManager $dm
     * @return Response
     */
    #[Route('/users-list/{filters}', name: 'app_get_users_list_from_filters')]
    public function showUsersList(string $filters, DocumentManager $dm): Response{

        $users = []; // initialise array user
        $filters = explode(',', $filters); // get center of interest from url
        
        $iter = $dm->createQueryBuilder() // create requête sql 
            ->find(User::class) // find all document from collection user
            ->field('centerOfInterest')->in($filters) // filter centerOfInterest same $filters
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

    /**
     * Route qui génère la liste des amis, lorsqu'aucun filtre n'est sélectionné
     *
     * @param Request $request
     * @param DocumentManager $dm
     * @return Response
     */
    #[Route('/users-list/', name: 'app_get_users_list_without_filters')]
    public function showUsersListFull(Request $request ,DocumentManager $dm): Response{
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
            'users' => $users,
           

        ]);
    }


   

    #[Route('/resa', name: 'app_resa')]
    public function resa(): Response
    {
        return $this->render('Group/resa.html.twig');
    }

    /**
     * Route d'ajout d'une personne à un group d'amis
     *
     * @param GroupRepository $groupRepository
     * @param UserRepository $userRepository
     * @param string $idUsers
     * @param SessionInterface $session
     * @return Response
     */
    // #[Route('/add/{idUsers}', name: 'app_add_group')]
    // public function addGroup(GroupRepository $groupRepository,  UserRepository $userRepository, string $idUsers, SessionInterface $session): Response
    // {


    //     $group = new Group();
    //     $user = new User();
     
     
    //     $listIdUser = explode(',', $idUsers); // get center of interest from url


    //     //dd($listIdUser);
    //     $status = 'waiting'; // status
    //     $group->setStatus($status);

    //     $userById = $userRepository->findUserById($session->get('id'));

    //     $authors = $userById->username;
    //     $group->setAuthors($authors);

    //     // Get the current timestamp
    //     $timestamp = time();

    //     // Convert to a string with a specific format
    //     $dateString = date('Y-m-d\TH:i', $timestamp);

    //      // Set the reservationDate property with the current timestamp
    //     //  dump($dateString); // Log the $dateString value
    //     // $group->setReservationDate($dateString);

    //     $creationGroup = $dateString; // date de creation
        
    //     $group->setCreateGroup($creationGroup);
    //     // $group->setReservationDate($creationGroup);

    //     foreach($listIdUser as $id){
    //         $guest = new Guest();
    //         $user = $userRepository->findUserById($id);
    //         $guest->setGuest($user);
    //         $guest->setUsername($user->getUsername()); // Set the username for the guest
    //         $guest->setInvitation('waiting');
    //         $group->addGuest($guest);
    //     }
       
    //     $groupRepository->save($group);

    //         return $this->redirectToRoute('app_home',[

    //         ]);
    // }

    // #[Route('/accept/{id}', name: 'accept_Invitation')]
    // public function acceptInvitation($id,GroupRepository $groupRepository, UserRepository $userRepository, SessionInterface $session, DocumentManager $dm): Response{
        
    // $idGroup = $id; // Replace $groupId with the ID you want to find

    //   // Get the currently logged-in user ID from the session
    // $currentUserId = $session->get('id');

    // // Find the group document by its ID
    // $group = $groupRepository->findOneBy(['id' => $idGroup]);

    // // Get the guests from the group document
    // $guests = $group->getGuests();

    // // Iterate through the guests and update the invitation status for the matching user
    // foreach ($guests as $guest) {
    //     // Assuming you have a "getId" method in the User entity to get the user's ID
    //     $guestUserId = $guest->getGuest()->getId();

    //     if ($guestUserId === $currentUserId) {
    //         $guest->setInvitation('succes sa marche ');
    //         break; // Stop iterating after updating the matching guest
    //     }
    // }

    // // Save the updated group document back to the database
    // $dm->flush();
    //     return $this->redirectToRoute('app_get_resa');


    // }
    //         // modifie le document

    // #[Route('/resa', name: 'app_get_resa')]
    // public function resa( GroupRepository $groupRepository ,DocumentManager $dm, SessionInterface $sessionInterface): Response{
        
    //     $idSession = $sessionInterface->get('id');

    //    //appelle dans group ton id dans guest
    //    $groups = ($groupRepository->findBy([
    //         'guests.guest.$id' => new ObjectId($idSession),
    //     ]));

    //     $arrayFilter = [];

    //     //dd($groups[0]->guests->toArray());
    //     if(!empty($groups[0])){
    //     foreach($groups[0]->guests->toArray() as $userInvitate){
    //             $arrayFilter[] = $userInvitate;
    //         }
    //     }
        
    //     return $this->render('Group/resa.html.twig',[
    //         'idSession' => $idSession,
    //         'groups' => $groups,
    //     ]);
    // }


    // #[Route('/resaDate', name: 'app_resa_date')]
    // public function resaDate(DocumentManager $dm): Response{
        

    //     return $this->render('Group/date.html.twig',[

    //     ]);
    // }


}