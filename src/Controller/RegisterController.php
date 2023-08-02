<?php

namespace App\Controller;

use App\Document\User;
use App\Form\RegisterType;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/register')]
class RegisterController extends AbstractController
{
    #[Route('/add', name: 'app_register')]
    public function index(Request $request, UserRepository $userRepository, DocumentManager $documentManager, SessionInterface $sessionInterface): Response
    {

        $messageAlert = '';

        // instantiates the class User
        $user = new User();
        
        // create form for /Register/index.html.twig
        $form = $this->createForm(RegisterType::class, $user);

        // retriev the inputs values from form 
        $form->handleRequest($request);

        // if from is submitted and valid then save the forms values in database
        if($form->isSubmitted() && $form->isValid() ){
            //je force le role pour l'enregistrement
            //$user->setRoles(['ROLE_USER']);

            if($userRepository->checkUserRegister($user->getEmail())){
                $messageAlert = 'cet email existe déjà';
            }else{
                $passwordHash = password_hash($user->getPassword(), PASSWORD_BCRYPT); // hash password from form 
                $user->setPassword($passwordHash); // update password in User class
                $userRepository->save($user); // Post user to database
                return $this->redirectToRoute('app_login'); // redirect to app_home route
            }
        }

        $email = $sessionInterface->get('email');

        // if(isset($email)){
        //     echo $email;
        // }

        // return to Register/index.html.twig page
        return $this->render('Register/index.html.twig',[

            'FormRegister' => $form->createView(), //send the form
            'alert' => $messageAlert
        ]);

       
    }
}