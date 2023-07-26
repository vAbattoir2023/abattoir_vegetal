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


#[Route('/deleteGrp/{id}', name: 'app_grpadmin_delete')]
public function delete(Request $request, GroupRepository  $groupRepository, $id): Response
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