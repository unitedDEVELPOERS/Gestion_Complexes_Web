<?php

namespace App\Controller;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Form\TerrainType;
use App\Repository\ReservationRepository;
use App\Repository\TerrainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{


    /**
     * @Route("/reservation/add", name="re")
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
        return $this->render('Admin/reservation/Ajouter.html.twig',['form' => $form->createView()]);

    }

    /**
     * @param ReservationRepository $repository
     * @return Response
     * @Route ("/AfficheReservations/", name="Reservations")
     */
    public function Affiche(ReservationRepository  $repository){
        $reservations = $repository->findAll();
        return $this->render('Admin/reservation/listeReservations.html.twig', ['reservations' => $reservations]);
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
     * @Route("reservation/update/{id}", name="updateReservation")
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


    /**
     * @Route("terrain/reserver/{id}", name="updateTerrain")
     */

    function reserver(TerrainRepository $repository,Request $request, $id){
        $terrain = $repository->find($id);
        $form = $this->createForm(TerrainType::class, $terrain);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $file = $terrain->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('terrain_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $em=$this->getDoctrine()->getManager();

            $terrain->setImage($fileName);


            $em->flush();

            $this -> addFlash('success', 'Terrain bien réserver avec succès');


        }
        return $this->render('front/terrain/sh.html.twig',['form' => $form->createView()]);
    }


}
