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
    /**
     * the route login execute login function
     * login function  
     */
    #[Route('/login', name: 'app_login')]
    public function login(UserRepository $userRepository, Request $request, SessionInterface $sessionInterface): Response
    {
        $messageAlert = '';

        $user = new User(); // get User class document

        $form = $this->createForm(LoginType::class, $user); // create form for document user
        $form->handleRequest($request); // get form data

        // form is submitted and valid
        if($form->isSubmitted() && $form->isValid()){

            $email = $user->getEmail(); // store email user in $email
            $password = $user->getPassword(); // store password user in $password

             // get user of database with email params from user class document
            $userFromBdd = $userRepository->findUserByEmail($email);
            
            if ($userFromBdd === null) {
                // Redirect with the error message
                $messageAlert = 'Invalid email. Please try again.';

            } else if(password_verify($password, $userFromBdd->password)){
            // if the password hash and password from form is the same

                $sessionInterface->set('email', $userFromBdd->email); // add email to session
                $sessionInterface->set('id', $userFromBdd->id); // add id to session

                if(!empty($userFromBdd->centerOfInterest)) {
                    // redirect to profil user with form data
                    return $this->redirectToRoute('app_user_profil_success');
                }else{
                    // redirect to profil user for fill in form
                    return $this->redirectToRoute('app_user_profil');
                }
            }else{
                // adds a message that 
                $messageAlert = 'Invalid password. Please try again.';
            }
        }

        return $this->render('Login/index.html.twig',[
            'Form' => $form->createView(),
            'alert' => $messageAlert
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(UserRepository $userRepository, Request $request, SessionInterface $sessionInterface)
    {
        $sessionInterface->clear();

        return $this->redirectToRoute('app_home');
    }  
}
