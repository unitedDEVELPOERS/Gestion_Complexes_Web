<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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




    /**
     * @param ProduitRepository $repository
     * @return Response
     * @Route ("/shop", name="shop")
     */
    public function shop(ProduitRepository  $repository, Request $request){
        $produits = $repository->findAll();


        return $this->render('front/shop.html.twig', ['produits' => $produits]);
    }

}
