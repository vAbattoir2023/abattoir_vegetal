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
        // $form = $this->createForm(UserType::class, $user);
        // $form->handleRequest($request);

        // if($form->isSubmitted() && $form->isValid()){
            
        //     $documentManager->persist($user);
        //     $documentManager->flush();
        // }
        
        $user->setUserName('Cyril');

        $userRepository->save($user);

        $allData = $userRepository->findAllFromBdd();
        
        //findbyId
        

        return $this->render('Home/base.html.twig',[

            // 'UserForm' => $form->createView(),
            'allData' => $allData

        ]);
    }
}
