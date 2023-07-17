<?php

namespace App\Controller;

use App\Document\User;
use App\Form\User2Type;
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
        
        $form = $this->createForm(User2Type::class, $user);
        $form->handleRequest($request);

        return $this->render('user_profil/index.html.twig',[
            'Form' => $form->createView()
        ]);
    }
}
