<?php

namespace App\Controller;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }

    /**
     * @Route("/reservation/add", name="terrain")
     */
    function add(Request $request)
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $reservation->setDateCreation(new \DateTime('now'));

            $em=$this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            $this -> addFlash('success', 'Réservation bien ajoutée avec succès');
            return $this->redirectToRoute("AfficheReservations");
        }
        return $this->render('reservation/Ajouter.html.twig',['form' => $form->createView()]);

    }

    /**
     * @param ReservationRepository $repository
     * @return Response
     * @Route ("/AfficheReservations/", name="AfficheReservations")
     */
    public function Affiche(ReservationRepository  $repository){
        $reservations = $repository->findAll();
        return $this->render('Admin/reservation/Affiche.html.twig', ['reservations' => $reservations]);
    }

    /**
     * @Route("/reservation/supp/{id}", name="d", methods="DELETE")
     */


    function delete(Reservation $reservation, Request $request)
    {


        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();

            $this->addFlash('danger', 'Réservation annulée');
        }
        else $this->addFlash('danger', 'err !');
        return $this->redirectToRoute("AfficheReservations");
    }
    /**
     * @Route("reservation/update/{id}", name="update")
     */

    function Update(ReservationRepository $repository,Request $request, $id){
        $reservation = $repository->find($id);
        $form = $this->createForm(TerrainType::class, $reservation);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            $this -> addFlash('success', 'Réservation bien modifiée avec succès');

            return $this->redirectToRoute("AfficheReservations");
        }
        return $this->render('reservation/Update.html.twig',['form' => $form->createView()]);
    }

}
