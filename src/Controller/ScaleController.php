<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ScaleController extends AbstractController
{
    #[Route('/scale', name: 'app_scale')]
    public function index(): Response
    {
        return $this->render('scale.html.twig');
    }
}