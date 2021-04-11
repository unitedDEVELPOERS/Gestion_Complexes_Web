<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/base", name="base")
     */
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }



    /**
     * @Route("/matches", name="base")
     */
    public function matches(): Response
    {
        return $this->render('matches/index.html.twig', [
            'controller_name' => 'MatchesController',
        ]);
    }

    /**
     * @Route("/joueurs", name="base")
     */
    public function joueurs(): Response
    {
        return $this->render('joueurs/index.html.twig', [
            'controller_name' => 'JoueursController',
        ]);
    }



    /**
     * @Route("/contact", name="base")
     */
    public function contact(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }




}
