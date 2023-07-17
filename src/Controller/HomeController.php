<?php

namespace App\Controller;

use App\Document\User;
use App\Form\User2Type;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController
{

    #[Route('/test', name: 'app_home')]
    public function index(Request $request, UserRepository $userRepository, DocumentManager $documentManager): Response
    {
        $user = new User();

        $allData = $userRepository->findAllFromBdd();

        //get id of data user from BDD
        $id = $allData[0]->getId();

        //find by id with $id
        $userById = $userRepository->findById($id);

        // $email = $request->request->get('email', '');
        // $password = $request->request->get('password', '');

        // if(isset($email)&& isset($password)){

        //     $user->setEmail($email);
        //     $user->setPassword($password);

        //     $documentManager->persist($user);
        //     $documentManager->flush();
        //     var_dump($userById);
        // }
        
        

        //get User Document
       $userDoc = $allData[0];
        
        // // echo user by id
        // echo'<pre>';
        // var_dump($user->getId());
        // echo'<pre>';

        // test pour les inputs
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $userRepository->save($user);

            echo '<pre>';
            var_dump($user);
            echo '</pre>';

            session_start();
            $_SESSION['id'] = $user->getId();
            echo $_SESSION['id'];

            return $this->redirectToRoute('update', ['id'=> $user->getId() ]);
        }

        //remove byId 
        //$userRepository->removeByDocument($userDoc);

        return $this->render('Home/base.html.twig',[

            'UserForm' => $form->createView(),
            // 'allData' => $allData

        ]);
    }
    #[Route('/update/{id}', name: 'update')]
    public function update(DocumentManager $documentManager, Request $request, UserRepository $userRepository, User $user, $id) : Response
    {

        $form = $this->createForm(User2Type::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $product = $documentManager->getRepository(User::class)->find($id);
        
            if (! $product) {
                throw $this->createNotFoundException('No product found for id ' . $id);
            }
        
            $product->setEmail($user->getEmail());
        
            $documentManager->flush();
        }
        if( $id ){
            echo 'voici l\'id'. $id;
        }

        return $this->render('user_profil/index.html.twig',[

            // 'allData' => $allData
            'Form' => $form->createView(),

        ]);
        
    }
}
