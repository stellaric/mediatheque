<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscritController extends AbstractController
{
    /**
     * @Route("/inscrit", name="app_inscrit")
     */
    public function index(): Response
    {
        return $this->render('inscrit/index.html.twig', [
            'controller_name' => 'InscritController',
        ]);
    }
}
