<?php

namespace App\Controller;

use App\Document\Group;
use App\Form\UserType;
use App\Repository\GroupRepository;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/adminGrp')]
class AdminGroupController extends AbstractController
{
    #[Route('/', name: 'app_admin_grpindex')]
    public function index(GroupRepository $groupeRepository, sessionInterface $sessionInterface): Response    {

        
        return $this->render('Admin/reservation.html.twig', [
            //on recupere la liste des administrateur en fonction du ROLE_ADMIN
            'groups' => $groupeRepository->findAllGrpFromBdd(),
        ]);
    }

//     #[Route('/{id}', name: 'app_admin_grpshow')]
//     public function show(Group $group, $id, GroupRepository  $groupRepository): Response
//     {
//    // get id user from session
//    $groupFromBdd = $groupRepository->findGroupsById($id);


//    if(!$groupFromBdd){
//        return $this->redirectToRoute('app_home');
//    }

//    // get document user from database
        
//         return $this->render('user_profil/profil.html.twig', [
//             'group' => $groupFromBdd,
//         ]);
//     }


//     #[Route('/edit/{id}', name: 'app_admin_edit')]
//     public function edit($id, Request $request, UserRepository $userRepository, DocumentManager $documentManager, SessionInterface $sessionInterface): Response
//     {
    
//        // get id user from session
//    $userFromBdd = $userRepository->findUserById($id);

//     // create form for the database
//     $form = $this->createForm(UserType::class, $userFromBdd);
//     // get the data from form
//     $form->handleRequest($request);

//     // if data from form is submitted and valid
//     if ($form->isSubmitted() && $form->isValid()) {
//              //update the data to user in database
//              $userRepository->save($userFromBdd, true);
//         // Redirect to success page
//         return $this->redirectToRoute('app_admin_index');
//     }

//     return $this->render('user_profil/index.html.twig', [
//         // send form for database
//         'UserForm' => $form->createView(),
//         'user' => $userFromBdd,
//     ]);
// }

#[Route('/deleteGrp/{id}', name: 'app_grpadmin_delete')]
public function delete(Request $request, GroupRepository  $groupRepository, $id): Response
{
    $groupFromBdd = $groupRepository->find($id);

    if ($this->isCsrfTokenValid('delete'. $groupFromBdd->getId(), $request->request->get('_token'))) {
        $groupRepository->removeByDocument($groupFromBdd, true);
    }

    return $this->redirectToRoute('Admin/app_admin_reservation', [], Response::HTTP_SEE_OTHER, [
        'groups' => $groupFromBdd,
    ]);
}




}