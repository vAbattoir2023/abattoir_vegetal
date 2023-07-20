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



#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_index', methods: ['GET'])]
    public function index(UserRepository $userRepository, sessionInterface $sessionInterface): Response    {

           // get id user from session
           $admins = $sessionInterface->get('id');
           $userRepository->findUserByRoles('ROLE_ADMIN');
          // if not user then redirect to app_register
          if (!$admins) {
            return $this->redirectToRoute('app_register');
        } 
        return $this->render('admin/index.html.twig', [
            //on recupere la liste des administrateur en fonction du ROLE_ADMIN
            'users' => $userRepository->findAllFromBdd(),
        ]);
    }

    #[Route('/{id}', name: 'app_admin_show', methods: ['GET'])]
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


    #[Route('/edit/{id}', name: 'app_admin_edit', methods: ['GET', 'POST'])]
    public function edit($id, Request $request, UserRepository $userRepository, DocumentManager $documentManager, SessionInterface $sessionInterface): Response
    {
    
       // get id user from session
   $userFromBdd = $userRepository->findUserById($id);

    // create form for the database
    $form = $this->createForm(UserType::class, $userFromBdd);
    // get the data from form
    $form->handleRequest($request);

    // if data from form is submitted and valid
    if ($form->isSubmitted() && $form->isValid()) {
             //update the data to user in database
             $userRepository->save($userFromBdd, true);
        // Redirect to success page
        return $this->redirectToRoute('app_admin_index');
    }

    return $this->render('user_profil/index.html.twig', [
        // send form for database
        'UserForm' => $form->createView(),
        'user' => $userFromBdd,
    ]);
}

#[Route('/delete/{id}', name: 'app_admin_delete', methods: ['POST'])]
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

#[Route('/reservation', name: 'app_admin_reservation', methods: ['POST'])]
public function reservation(): Response
{


    return $this->render('admin/reservation.html.twig', [
    
    ]);
}


}