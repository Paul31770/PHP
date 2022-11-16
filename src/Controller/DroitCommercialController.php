<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DroitCommercialController extends AbstractController
{
    #[Route('/droitcommercial', name: 'app_droit_commercial')]
    public function index(): Response
    {
        return $this->render('droit_commercial/index.html.twig', [
            'controller_name' => 'DroitCommercialController',
        ]);
    }
}
