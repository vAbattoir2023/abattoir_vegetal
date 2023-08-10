<?php

namespace App\Controller;

use App\Form\UserType;
use App\Repository\GroupRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    /**
     * Description :
     * redirect to admin page with all users from database
     * 
     * @param UserRepository is used to use functions that query the database
     * @return Response return to admin page with user data
     */
    #[Route('/', name: 'app_admin_index')]
    public function adminData(UserRepository $userRepository): Response 
    {
        $allUsers = $userRepository->findAllFromBdd(); // GET all users from the database

        // Check if the current user has the ROLE_ADMIN role
        if (!$this->isGranted('ROLE_ADMIN')) 
            return $this->redirectToRoute('app_home_help');  // if current user is not admin, redirect to home help
        
        return $this->render('Admin/index.html.twig', [
            'users' => $allUsers,
        ]);
    }

    /**
     * Description :
     * Show the user selected with his ID
     * 
     * @param UserRepository is used to use functions that query the database
     * @param id GET the user ID from URL
     * @return Response return to user profil with user data
     */
    #[Route('/{id}', name: 'app_admin_show')]
    public function show($id, UserRepository  $userRepository): Response
    {

        $userFromBdd = $userRepository->findUserById($id);  // find user by id

        // check if the user from databse is undifined
        if(!$userFromBdd)
            return $this->redirectToRoute('app_home'); // redirect to home page

        return $this->render('user_profil/profil.html.twig', [
            'user' => $userFromBdd,
        ]);
    }


    /**
     * Description :
     * Edit user data
     * 
     * @param UserRepository is used to use functions that query the database 
     * @param request is used to GET form data
     * @param id GET the user ID from URL
     * @param Response return to user profil with his data
     */
    #[Route('/edit/{id}', name: 'app_admin_edit')]
    public function edit($id, Request $request, UserRepository $userRepository): Response
    {

        $userFromBdd = $userRepository->findUserById($id);          // find user by id

        $form = $this->createForm(UserType::class, $userFromBdd);   // create a form for User document
        $form->handleRequest($request);                             // GET form data

        // check if form data is submitted and valid
        if($form->isSubmitted() && $form->isValid()) {

            $userRepository->save($userFromBdd, true);          // update user data and save it in database

            return $this->redirectToRoute('app_admin_index');   // redirect to admin page

        }

        return $this->render('user_profil/index.html.twig', [
            'UserForm' => $form->createView(),
            'user'     => $userFromBdd,
        ]);
    }

    /**
     * Description :
     * Delete user
     * 
     * @param UserRepository is used to use functions that query the database 
     * @param Request is used to GET form data
     * @param id GET the user ID from URL
     * @return Response return admin page
     */
    #[Route('/delete/{id}', name: 'app_admin_delete')]
    public function delete(Request $request, UserRepository $userRepository, $id): Response
    {

        $userFromBdd = $userRepository->findUserById($id); // find user by id

        // Checking the validity of the CSRF token before deleting the user
        if ($this->isCsrfTokenValid('delete'.$userFromBdd->getId(), $request->request->get('_token'))) {
            
            $userRepository->removeByDocument($userFromBdd, true); // delete user
        }

        return $this->redirectToRoute('app_admin_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * Description :
     * Show all groups from database
     *
     * @param GroupRepository is used to use functions that query the database 
     * @return Response return to Admin reservation page with all groups
     */
    #[Route('/showAllGroups', name: 'app_admin_grpindex')]
    public function showAllGroups(GroupRepository $groupeRepository): Response 
    {

        $groups = $groupeRepository->findAllGrpFromBdd(); // find all groups from database

        return $this->render('Admin/reservation.html.twig', [
            'groups' => $groups,
        ]);
    }

    /**
     * Description :
     * Delete the group
     * 
     * @param GroupRepository is used to use functions that query the database 
     * @param Request is used to GET the token
     * @return Response 
     */
    #[Route('/deleteGrp/{id}', name: 'app_grpadmin_delete')]
    public function deleteGroup(Request $request, GroupRepository  $groupRepository, $id): Response
    {
        $groupFromBdd = $groupRepository->find($id);

        if ($this->isCsrfTokenValid('delete'. $groupFromBdd->getId(), $request->request->get('_token'))) {
            $groupRepository->removeByDocument($groupFromBdd, true);
        }

        return $this->redirectToRoute('app_admin_grpindex', [], Response::HTTP_SEE_OTHER, [
            'groups' => $groupFromBdd,
        ]);
    }

}