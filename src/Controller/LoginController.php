<?php

namespace App\Controller;

use App\Document\User;
use App\Form\LoginType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(UserRepository $userRepository, Request $request, SessionInterface $sessionInterface): Response
    {
        $user = new User();

        $form = $this->createForm(LoginType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $formData = $form->getData();

            $email = $user->getEmail();
            $password = $user->getPassword();

            $userFromBdd = $userRepository->findUserByEmail($email);

            if(password_verify($password, $userFromBdd->password)){
                
                $sessionInterface->set('email', $email);

                return $this->redirectToRoute('app_register');
            }

        }


        return $this->render('Login/index.html.twig',[
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ReservationController.php',
            'Form' => $form->createView()
        ]);
    }
}
