<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrganismeFormationController extends AbstractController
{
    #[Route('/organismeformation', name: 'app_organisme_formation')]
    public function index(): Response
    {
        return $this->render('organisme_formation/index.html.twig', [
            'controller_name' => 'OrganismeFormationController',
        ]);
    }
}
