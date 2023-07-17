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



class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, UserRepository $userRepository, DocumentManager $documentManager): Response
    {

        $user = new User();

       $allData = $userRepository->findAllFromBdd();

       //get id of data user from BDD
       $id = $allData[0]->getId();

       //get User Document
       $userDoc = $allData[0];
        
       //find by id with $id
        $userById = $userRepository->findById($id);

        // echo user by id
        echo'<pre>';
        var_dump($userById);
        echo'<pre>';

        // test pour les inputs
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            
            $userRepository->save($user);

        }

        //remove byId 
        //$userRepository->removeByDocument($userDoc);



        return $this->render('Home/base.html.twig',[

            'UserForm' => $form->createView(),
            'allData' => $allData

        ]);
    }
}
