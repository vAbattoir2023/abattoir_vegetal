<?php

namespace App\Controller;

use App\Document\User;
use App\Form\LoginType;
use App\Form\RegisterType;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/auth')]
class RegisterController extends AbstractController
{
    #[Route('/', name: 'app_register')]
    public function register(Request $request, UserRepository $userRepository, DocumentManager $documentManager): Response
    {
        // instantiates the class User
        $user = new User();
        
        // create form for /Register/index.html.twig
        $form = $this->createForm(RegisterType::class, $user);

        // retriev the inputs values from form 
        $form->handleRequest($request);

        // if from is submitted and valid then save the forms values in database
        if($form->isSubmitted() && $form->isValid() ){

            $passwordHash = password_hash($user->getPassword(), PASSWORD_BCRYPT); // hash password from form 
            $user->setPassword($passwordHash); // update password in User class
            $userRepository->save($user); // Post user to database

            
           
        
            return $this->redirectToRoute('app_login', ['id'=> $user->getId() ]); // redirect to app_home route
        }

        // return to Register/index.html.twig page
        return $this->render('Register/index.html.twig',[

            'FormRegister' => $form->createView() //send the form
        ]);
    }
    #[Route('/login/{id}', name: 'app_login')]
    public function login(Request $request, UserRepository $userRepository, DocumentManager $documentManager, $id): Response
    {
        // instantiates the class User
        $user = new User();
        
        // create form for /Register/index.html.twig
        $form = $this->createForm(LoginType::class, $user);

        // retriev the inputs values from form 
        $form->handleRequest($request);

        // if from is submitted and valid then save the forms values in database
        if($form->isSubmitted() && $form->isValid() ){
            $product = $documentManager->getRepository(User::class)->find($id);

            $passwordHash = password_hash($user->getPassword(), PASSWORD_BCRYPT); // hash password from form 
            $user->setPassword($passwordHash); // update password in User class
            if (! $product) {
                return $this->redirectToRoute('app_register');
            }
        
         // Check if username and centerOfInterest are not submitted
         if (empty($user->getCenterOfInterest())) {
            return $this->redirectToRoute('app_user_profil', ['id' => $id]);
        }else{

            return $this->redirectToRoute('app_user_profil_success', ['id' => $id]); // Redirect to app_user_profil_success route with the user ID
        }
        $product->setEmail($user->getEmail());
        
        $documentManager->flush();
        } if( $id ){
            echo 'voici l\'id'. $id;
        }


        // return to Register/index.html.twig page
        return $this->render('Login/index.html.twig',[

            'FormLogin' => $form->createView() //send the form
        ]);
    }


}