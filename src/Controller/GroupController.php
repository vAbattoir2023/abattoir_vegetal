<?php

namespace App\Controller;

use App\Document\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/group')]
class GroupController extends AbstractController
{
    #[Route('/add', name: 'app_group')]
    public function index(): Response
    {
        // data checkbox
        // centerOfInterest from user
        // all useres from bdd

        return $this->render('Group/index.html.twig',[
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ReservationController.php',
        ]);
    }
   
}
