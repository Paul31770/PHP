<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DroitSociétésController extends AbstractController
{
    #[Route('/droitsocietes', name: 'app_droit_soci_t_s')]
    public function index(): Response
    {
        return $this->render('droit_sociétés/index.html.twig', [
            'controller_name' => 'DroitSociétésController',
        ]);
    }
}
