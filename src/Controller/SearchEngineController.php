<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchEngineController extends AbstractController
{
    #[Route('/search/engine', name: 'app_search_engine')]
    public function index(): Response
    {
        return $this->render('search_engine/index.html.twig', [
            'controller_name' => 'SearchEngineController',
        ]);
    }
}
