<?php

namespace App\Controller;

use App\Document\User;
use App\Form\User2Type;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(SessionInterface $sessionInterface): Response
    {

        $email = $sessionInterface->get('email');
        $idSession = $sessionInterface->get('id');


        if(isset($email)){
            echo $email;
        }

        return $this->render('base.html.twig',[
            'message' => 'Welcome to your new controller!',
            'idSession' => $idSession,

        ]);
        
    }
    #[Route('/home', name: 'app_home_index')]
    public function home(SessionInterface $sessionInterface): Response
    {

        return $this->render('Home/index.html.twig',[
          
        ]);
        
    }
    #[Route('/help', name: 'app_home_help')]
    public function help(SessionInterface $sessionInterface): Response
    {

        return $this->render('Home/help.html.twig',[
          
        ]);
        
    }
}
