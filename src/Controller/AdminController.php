<?php

namespace App\Controller;

use App\Document\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;



#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_index')]
    public function index(UserRepository $userRepository): Response
    {
        // Check if the current user has the ROLE_ADMIN role
        if (!$this->isGranted('ROLE_ADMIN')) 
            return $this->redirectToRoute('app_home_help');  // Redirect users without ROLE_ADMIN to your custom page
        

        return $this->render('Admin/index.html.twig', [
            //on recupere la liste des administrateur en fonction du ROLE_ADMIN
            'users' => $userRepository->findAllFromBdd(),
        ]);
    }

    #[Route('/{id}', name: 'app_admin_show')]
    public function show(User $user, $id, UserRepository  $userRepository): Response
    {
        // get id user from session
        $userFromBdd = $userRepository->findUserById($id);


        if(!$userFromBdd){
            return $this->redirectToRoute('app_home');
        }

        // get document user from database
        return $this->render('user_profil/profil.html.twig', [
            'user' => $userFromBdd,
        ]);
    }


    #[Route('/edit/{id}', name: 'app_admin_edit')]
    public function edit($id, Request $request, UserRepository $userRepository, DocumentManager $documentManager, SessionInterface $sessionInterface): Response
    {
        
        $userFromBdd = $userRepository->findUserById($id);          // get id user from session

        $form = $this->createForm(UserType::class, $userFromBdd);   // create a form for the User document
        $form->handleRequest($request);                             // get the form data

        // if data from form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($userFromBdd, true);          //update the data to user in database
            return $this->redirectToRoute('app_admin_index');   // Redirect to success page
        }

        return $this->render('user_profil/index.html.twig', [
            // send form for database
            'UserForm' => $form->createView(),
            'user' => $userFromBdd,
        ]);
    }

#[Route('/delete/{id}', name: 'app_admin_delete')]
public function delete(Request $request, UserRepository $userRepository, $id): Response
{
    $userFromBdd = $userRepository->findUserById($id);

    if ($this->isCsrfTokenValid('delete'.$userFromBdd->getId(), $request->request->get('_token'))) {
        $userRepository->removeByDocument($userFromBdd, true);
    }

    return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER, [
        'user' => $userFromBdd,
    ]);
}




}