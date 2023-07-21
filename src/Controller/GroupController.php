<?php

namespace App\Controller;

use App\Document\Reservation;
use App\Document\User;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/group')]
class GroupController extends AbstractController
{
    #[Route('/select_group', name: 'app_select_group')]
    public function select_group(UserRepository $userRepository): Response
    {
        // data checkbox
        $dataCheckbox = [
            'Animaux',
            'Environnement',
            'Art et culture',
            'Sport',
            'Voyages',
            'Musique',
            'Danse',
            'Sciences',
            'Bien-être',
            'Food',
            'Activités sociales',
            'Jeux vidéos',
        ];
        // centerOfInterest from user
        // all useres from bdd
        $allUser = $userRepository->findAllFromBdd();

        // echo '<pre>';
        // var_dump($allUser);
        // echo '</pre>';

        return $this->render('Group/index.html.twig',[
            'dataFormCheckbox' => $dataCheckbox,
            'allUsers' => $allUser
        ]);
    }

    #[Route('/getAllUsers', name: 'getAllUsers_app')]
    public function getAllUsers(UserRepository $userRepository): Response
    {
        $allUser = $userRepository->findAllFromBdd();

        // echo '<pre>';
        // var_dump($allUser);
        // echo '</pre>';

        return $this->json([
            'allUsers' => $allUser
        ]);
    }

    #[Route('/users-list/{filters}', name: 'app_get_users_list_from_filters')]
    public function showUsersList(string $filters, DocumentManager $dm): Response{

        $users = []; // user array vide
        $filters = explode('#', $filters); // get 
        
        $iter = $dm->createQueryBuilder()
            ->find(User::class)
            ->field('centerOfInterest')->all($filters)
            ->getQuery()
            ->execute();

        $users = [];
        while($iter->valid()) {
            $users[] = $iter->current();
            $iter->next();
        }

        return $this->render('Group/usersList.html.twig',[
            'users' => $users
        ]);
    }

    #[Route('/users-list/', name: 'app_get_users_list_without_filters')]
    public function showUsersListFull(DocumentManager $dm): Response{
        $users = [];
        
        $iter = $dm->createQueryBuilder()
            ->find(User::class)
            ->getQuery()
            ->execute();

        $users = [];
        while($iter->valid()) {
            $users[] = $iter->current();
            $iter->next();
        }

        return $this->render('Group/usersList.html.twig',[
            'users' => $users
        ]);
    }
}
