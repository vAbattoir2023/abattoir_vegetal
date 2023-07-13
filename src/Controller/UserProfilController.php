<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user', name: 'app_user_profil')]
class UserProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_user_profil')]
    public function index(): Response
    {
        return $this->render('user_profil/index.html.twig', [
            'controller_name' => 'UserProfilController',
        ]);
    }
}
