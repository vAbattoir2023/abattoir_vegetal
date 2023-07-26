<?php

namespace App\Controller;

use App\Document\Group;
use App\Document\User;
use App\Form\UserType;
use App\Repository\GroupRepository;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use MongoDB\BSON\ObjectId;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(SessionInterface $sessionInterface, GroupRepository $groupRepository, DocumentManager $dm): Response
    {

        $group = new Group();
        $email = $sessionInterface->get('email');
        $idSession = $sessionInterface->get('id');
        //dd(new ObjectId($idSession));

        //appelle dans group ton id dans guest
        $notifInvitation = ($groupRepository->findBy([
            'status' => "waiting",
            'guests.invitation' => "waiting",
            'guests.guest.$id' => new ObjectId($idSession),
        ]));

        $arrayFilter = [];

        //dd($notifInvitation[0]->guests->toArray());
        if(!empty($notifInvitation[0])){
            foreach($notifInvitation[0]->guests->toArray() as $userInvitate){

                if($userInvitate->invitation == 'waiting'){
                    $arrayFilter[] = $userInvitate;
                }

            }
        // dd($notifInvitation);
        }


        return $this->render('Home/index.html.twig',[
            'message' => 'Welcome to your new controller!',
            'idSession' => $idSession,
            'notifications' => $notifInvitation,
            'filterInvitation' => $arrayFilter,
        ]);
        
    }

    // public function notif(SessionInterface $sessionInterface, GroupRepository $groupRepository, DocumentManager $dm): Response
    // {

    //     $group = new Group();
    //     $email = $sessionInterface->get('email');
    //     $idSession = $sessionInterface->get('id');
    //     //dd(new ObjectId($idSession));

    //     //appelle dans group ton id dans guest
    //     $notifInvitation = ($groupRepository->findBy([
    //         'status' => "waiting",
    //         'guests.invitation' => "waiting",
    //         'guests.guest.$id' => new ObjectId($idSession),
    //     ]));

    //     $arrayFilter = [];

    //     //dd($notifInvitation[0]->guests->toArray());
    //     if(!empty($notifInvitation[0])){
    //         foreach($notifInvitation[0]->guests->toArray() as $userInvitate){

    //             if($userInvitate->invitation == 'waiting'){
    //                 $arrayFilter[] = $userInvitate;
    //             }

    //         }
    //     // dd($notifInvitation);
    //     }


    //     return $this->render('_header.html.twig',[
    //         'idSession' => $idSession,
    //         'notifications' => $notifInvitation,
    //         'filterInvitation' => $arrayFilter,
    //     ]);
        
    // }




    #[Route('/help', name: 'app_home_help')]
    public function help(SessionInterface $sessionInterface): Response
    {

        return $this->render('Home/help.html.twig',[
          
        ]);
        
    }
}
