<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/aboutus", name="aboutus")
     */
    public function index(): Response
    {
        return $this->render('front/aboutus.html.twig');
    }





}
