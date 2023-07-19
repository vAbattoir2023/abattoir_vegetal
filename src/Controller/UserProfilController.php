<?php

namespace App\Controller;

use App\Document\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/user_profil')]
class UserProfilController extends AbstractController
{
    #[Route('/{id}', name: 'app_user_profil')]
    public function index(Request $request, UserRepository $userRepository, DocumentManager $documentManager, $id): Response
    {
        $user = $userRepository->find($id);
        
        if (!$user) {
            return $this->redirectToRoute('app_register');
        }
        
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // All steps completed, process the form data
            $documentManager->flush();

            // Redirect to success page or next action
            return $this->redirectToRoute('app_user_profil_success', ['id' => $user->getId()]);
        }if( $id ){
            echo 'voici l\'id'. $id;
        }else{
            echo 'aucun id récupéré' ;
        }

        return $this->render('user_profil/index.html.twig', [
            'UserForm' => $form->createView(),
        ]);
    }

    #[Route('/profil/{id}', name: 'app_user_profil_success')]
    public function success($id, UserRepository $userRepository): Response
    {
        // Get the user by ID
        $user = $userRepository->find($id);
        //dd($user);
        return $this->render('user_profil/profil.html.twig', [
            'user' => $user,
        ]);
    }
}