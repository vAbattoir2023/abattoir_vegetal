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
    #[Route('/', name: 'app_user_profil')]
    public function index(Request $request, UserRepository $userRepository, DocumentManager $documentManager, ): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            var_dump($form->isSubmitted()); // Add this line

            // All steps completed, process the form data
            $documentManager->persist($user);
            $documentManager->flush();

            // Redirect to success page or next action
            return $this->redirectToRoute('app_user_profil_success');
        }

        return $this->render('user_profil/index.html.twig', [
            'UserForm' => $form->createView(),
        ]);
    }

    #[Route('/success', name: 'app_user_profil_success')]
    public function success(): Response
    {
        // Render the success page or perform additional actions
        return $this->render('user_profil/success.html.twig', [

            'message' => 'Welcome to your profil',


        ]);
    }
}