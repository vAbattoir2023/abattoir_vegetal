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
        return $this->render('base.html.twig');
    }

    #[Route('/header', name: 'app_header')]
    public function header(SessionInterface $sessionInterface, GroupRepository $groupRepository,UserRepository $userRepository, DocumentManager $dm): Response
    {
        $user = null;

        $userFromBdd = null;
        
        $id = $sessionInterface->get('id');

        if($id) $userFromBdd = $userRepository->findUserById($id);

        if($userFromBdd) $user = $userFromBdd;

        return $this->json(['user'=>$user]);
    }

    #[Route('/help', name: 'app_home_help')]
    public function help(SessionInterface $sessionInterface): Response
    {

        return $this->render('404.html.twig',[
          
        ]);
        
    }
}
