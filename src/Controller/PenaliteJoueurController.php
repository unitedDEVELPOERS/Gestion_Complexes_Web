<?php

namespace App\Controller;

use App\Entity\PenaliteJoueur;
use App\Form\PenaliteJoueurType;
use App\Form\PenaliteType;
use App\Repository\PenaliteJoueurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PenaliteJoueurController extends AbstractController
{
    /**
     * @Route("/penalite/joueur", name="penalite_joueur")
     */
    public function index(): Response
    {
        return $this->render('penalite_joueur/index.html.twig', [
            'controller_name' => 'PenaliteJoueurController',
        ]);
    }

    /**
     * @Route("/penalite/add", name="penalite")
     */
    function add(Request $request)
    {
        $penaliteJoueur = new PenaliteJoueur();
        $form = $this->createForm(PenaliteJoueurType::class, $penaliteJoueur);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($penaliteJoueur);
            $em->flush();

            $this -> addFlash('success', 'Penalité bien affectée avec succès');
            return $this->redirectToRoute("AffichePenalite");
        }
        return $this->render('penaliteJoueur/Ajouter.html.twig',['form' => $form->createView()]);

    }

    /**
     * @param PenaliteJoueurRepository $repository
     * @return Response
     * @Route ("/AffichePenaliteJoueur/", name="AffichePenalitesJoueur")
     */
    public function Affiche(PenaliteJoueurRepository  $repository){
        $penaliteJoueur = $repository->findAll();
        return $this->render('Admin/penaliteJoueur/Affiche.html.twig', ['penalites' => $penaliteJoueur]);
    }

    /**
     * @Route("/penaliteJoueur/supp/{id}", name="d", methods="DELETE")
     */


    function delete(PenaliteJoueur $penaliteJoueur, Request $request)
    {

        if ($this->isCsrfTokenValid('delete' . $penaliteJoueur->getId(), $request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($penaliteJoueur);
            $em->flush();

            $this->addFlash('danger', 'Penalité bien supprimée avec succès');
        }

        return $this->redirectToRoute("AffichePenaliteJoueur");
    }
    /**
     * @Route("penaliteJoueur/update/{id}", name="update")
     */

    function Update(PenaliteJoueurRepository $repository,Request $request, $id){
        $penaliteJoueur = $repository->find($id);
        $form = $this->createForm(PenaliteType::class, $penaliteJoueur);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            $this -> addFlash('success', 'Penalité bien affectée avec succès');

            return $this->redirectToRoute("AffichePenaliteJoueur");
        }
        return $this->render('penaliteJoueur/Update.html.twig',['form' => $form->createView()]);
    }


}
