<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class leaderBoardController extends AbstractController
{
    #[Route ('/LeaderBoard', name: 'app_leaderboard')]
    public function index(): Response
    {
        return $this->render('leaderBoard.html.twig');
    }
}