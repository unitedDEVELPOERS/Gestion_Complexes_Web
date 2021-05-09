<?php

namespace App\Controller;

use App\Entity\Penalite;
use App\Form\PenaliteType;
use App\Repository\PenaliteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PenaliteController extends AbstractController
{
    /**
     * @Route("/penalite", name="penalite")
     */
    public function index(): Response
    {
        return $this->render('penalite/index.html.twig', [
            'controller_name' => 'PenaliteController',
        ]);
    }

    /**
     * @Route("/penalite/add", name="penalite")
     */
    function add(Request $request)
    {
        $penalite = new Penalite();
        $form = $this->createForm(PenaliteType::class, $penalite);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($penalite);
            $em->flush();

            return $this->redirectToRoute("AffichePenalite");
        }
        return $this->render('penalite/Ajouter.html.twig',['form' => $form->createView()]);

    }

    /**
     * @param PenaliteRepository $repository
     * @return Response
     * @Route ("/AffichePenalite/", name="AffichePenalites")
     */
    public function Affiche(PenaliteRepository  $repository){
        $penalite = $repository->findAll();
        return $this->render('penalite/Affiche.html.twig', ['penalites' => $penalite]);
    }

    /**
     * @Route("penalite/update/{id}", name="updatePenalite")
     */

    function Update(PenaliteRepository $repository,Request $request, $id){
        $penalite = $repository->find($id);
        $form = $this->createForm(PenaliteType::class, $penalite);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            $this -> addFlash('success', 'Penalité bien modifiée avec succès');

            return $this->redirectToRoute("AffichePenalite");
        }
        return $this->render('penalite/Update.html.twig',['form' => $form->createView()]);
    }


    /**
     * @Route("/penalite/supp/{id}", name="dp", methods="DELETE")
     */
    function delete(Penalite $penalite, Request $request)
    {



            $em = $this->getDoctrine()->getManager();
            $em->remove($penalite);
            $em->flush();

            $this->addFlash('danger', 'Penalité bien supprimée avec succès');


        return $this->redirectToRoute("AffichePenalites");
    }


}
