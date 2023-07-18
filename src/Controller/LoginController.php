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
                $sessionInterface->set('id', $userFromBdd->id);

                if(empty($userFromBdd->getCenterOfInterest())) {
                    // redirect to profil user with form data
                }else{
                    // redirect to profil user for fill in form
                    return $this->redirectToRoute('app_home');
                }
            }

        }
        $email = $sessionInterface->get('email');

        if(isset($email)){
            echo $email;
        }


        return $this->render('Login/index.html.twig',[
            'Form' => $form->createView()
        ]);
    }
    #[Route('/logout', name: 'app_logout')]
    public function logout(UserRepository $userRepository, Request $request, SessionInterface $sessionInterface)
    {
        $sessionInterface->clear();

        return $this->redirectToRoute('app_home');
    }  
}
