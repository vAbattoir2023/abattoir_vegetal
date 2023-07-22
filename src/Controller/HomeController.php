<?php

namespace App\Controller;

use App\Document\Group;
use App\Document\User;
use App\Form\User2Type;
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
    #[Route('/h', name: 'app_home')]
    public function index(SessionInterface $sessionInterface, GroupRepository $groupRepository, DocumentManager $dm): Response
    {

        // $email = $sessionInterface->get('email');
        // $idSession = $sessionInterface->get('id');
        // //dd(new ObjectId($idSession));

        // //appelle dans group ton id dans guest
        // $notifInvitation = ($groupRepository->findBy([
        //     'status' => "waiting",
        //     'guests.invitation' => false,
        //     'guests.guest.$id' => new ObjectId($idSession),
        // ]));

        // // dd($notifInvitation[0]->guests->toArray()[0]->guest->id);

        // // if(empty($sessionInterface->get('notifications'))){
        // //     $sessionInterface->set('notifications', $notifInvitation);
        // // }

        //     //dd($sessionInterface->get('notifications'));

        // if(isset($email)){
        //     echo $email;
        // }

        // return $this->render('base.html.twig',[
        //     'message' => 'Welcome to your new controller!',
        //     'idSession' => $idSession,
        //     'notifications' => $notifInvitation
        // ]);
        
    }
}
