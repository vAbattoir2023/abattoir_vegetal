<?php

namespace App\Controller;

use App\Document\Reservation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function reserver():Response
    {
        // Render the success page or perform additional actions
        return $this->render('reservation/index.html.twig', [

            'message' => 'Welcome to your profil',


        ]);
    }

    #[Route('/reservation/date', name: 'app_date')]
    public function choicesDate():Response
    {
        // Render the success page or perform additional actions
        return $this->render('reservation/date.html.twig', [

            'message' => 'Welcome to your profil',


        ]);
    }
   
}
