<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransmissionAchatController extends AbstractController
{
    #[Route('/transmissionachat', name: 'app_transmission_achat')]
    public function index(): Response
    {
        return $this->render('transmission_achat/index.html.twig', [
            'controller_name' => 'TransmissionAchatController',
        ]);
    }
}
