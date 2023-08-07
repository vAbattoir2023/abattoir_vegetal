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
    public function home(SessionInterface $sessionInterface, GroupRepository $groupRepository,UserRepository $userRepository, DocumentManager $dm): Response
    {
        // $email = $sessionInterface->get('email');
        // $idSession = $sessionInterface->get('id');

        // $username = $userRepository->findUserByEmail($email)->username;

        // //appelle dans group ton id dans guest
        // $guest = ($groupRepository->findBy([
        //     'status' => "waiting",
        //     'guests' => [
        //         '$elemMatch' => [
        //             'invitation' => "waiting",
        //             'guest.$id' => new ObjectId($idSession),
        //         ]
        //     ]
        // ]));

        // $declin = ($groupRepository->findBy([
        //     'status' => "waiting",
        //     'guests' => [
        //         '$elemMatch' => [
        //             'invitation' => "refuse",
        //             'guest.$id' => new ObjectId($idSession),
        //         ]
        //     ]
        // ]));

        // $accept = ($groupRepository->findBy([
        //     'status' => "waiting",
        //     'guests' => [
        //         '$elemMatch' => [
        //             'invitation' => "accept",
        //             'guest.$id' => new ObjectId($idSession),
        //         ]
        //     ]
        // ]));

        // $allAccept = $groupRepository->findBy([
        //     'status' => "waiting",
        //     'guests' => [
        //         '$elemMatch' => [
        //             'guest.$id' => new ObjectId($idSession),
        //         ],
        //         '$elemMatch' => [
        //             'invitation' => "accept",
        //         ],
        //         '$not' => [
        //             '$elemMatch' => [
        //                 'invitation' => "waiting",
        //             ],
        //         ],
        //     ],
        // ]);

        // $authors = ($groupRepository->findBy(['authors' => "$username"]));

        // //all accept
        // $allAccept;

        // // notif accept
        // $accept;

        // // notif declin
        // $declin;

        // //notif you invite
        // $guest ;
        
        // //notif authors
        // $authors ;

        // dd($guest);

        return $this->render('base.html.twig',[
            // 'idSession' => $idSession,
        ]);
        
    }

    #[Route('/help', name: 'app_home_help')]
    public function help(SessionInterface $sessionInterface): Response
    {

        return $this->render('404.html.twig',[
          
        ]);
        
    }
}
