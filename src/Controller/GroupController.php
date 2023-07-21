<?php

namespace App\Controller;

use App\Document\Reservation;
use App\Repository\UserRepository;
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
        
        // all useres from bdd
        $allUser = $userRepository->findAllFromBdd();
        $allUserFilter = [];

        // if data from post input then get it
        if($_GET){
            // store center of interest checked in arrayChoiceCeckbox
            $arrayChoiceCeckbox = $_GET;

            // get key of arrayChoiceCeckbox ( it's the values dz )
            $values = array_keys($arrayChoiceCeckbox);
                
            foreach($allUser as $key => $user) {
                

                if(in_array($user->centerOfInterest, $values)){
                    echo '<pre>';
                    var_dump($values);
                    echo '</>';
                }else{
                }
            } 
            echo '<pre>';
            var_dump($allUserFilter);
            echo '</>';
        }
        

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

   
}
