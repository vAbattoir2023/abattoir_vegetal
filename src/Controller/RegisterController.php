<?php

namespace App\Controller;

use App\Document\User;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function index(Request $request, UserRepository $userRepository, DocumentManager $documentManager): Response
    {

        $user = new User();

        // test pour les inputs
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
            $userRepository->save($user);

        }

        return $this->render('user_profil/index.html.twig',[
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RegisterController.php',
            'register_form' => $form->createView()
        ]);
    }
}
