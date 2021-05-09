<?php

namespace App\Controller;

use App\Entity\Terrain;
use App\Form\TerrainType;
use App\Repository\TerrainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


class TerrainController extends AbstractController
{
    /**
     * @Route("/terrain", name="terrain")
     */
    public function index(): Response
    {
        return $this->render('terrain/index.html.twig', [
            'controller_name' => 'TerrainController',
        ]);
    }

    /**
     * @Route("/Admin/terrain/add", name="terrain")
     */
    function add(Request $request)
    {
        $terrain = new Terrain();
        $form = $this->createForm(TerrainType::class, $terrain);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $terrain->setCreatedAt(new \DateTime('now'));

            $em=$this->getDoctrine()->getManager();
            $em->persist($terrain);
            $em->flush();

            $this -> addFlash('success', 'Terrain bien ajouté avec succès');
            return $this->redirectToRoute("AfficheTerrains");
        }
        return $this->render('Admin/terrain/Ajouter.html.twig',['form' => $form->createView()]);

    }

    /**
     * @param TerrainRepository $repository
     * @return Response
     * @Route ("/AfficheTerrains/", name="AfficheTerrains")
     */
    public function Affiche(TerrainRepository  $repository){
        //$repo = $this->getDoctrine()->getRepository(Classroom::class);
        $tettains = $repository->findAll();
        return $this->render('admin/terrain/listeTerrains.html.twig', ['terrains' => $tettains]);
    }

    /**
     * @Route("/terrain/supp/{id}", name="d", methods="DELETE")
     */


    function delete(TerrainRepository $repository,Terrain $terrain, Request $request)
    {

        if ($this->isCsrfTokenValid('delete' . $terrain->getId(), $request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($terrain);
            $em->flush();

            $this->addFlash('danger', 'Terrain bien supprimé avec succès');
        }
        else $this->addFlash('danger', 'Terrain non supprimé !');
        return $this->redirectToRoute("AfficheTerrains");
    }
    /**
     * @Route("terrain/update/{id}", name="update")
     */

    function Update(TerrainRepository $repository,Request $request, $id){
        $terrain = $repository->find($id);
        $form = $this->createForm(TerrainType::class, $terrain);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            $this -> addFlash('success', 'Terrain bien modifié avec succès');

            return $this->redirectToRoute("AfficheTerrains");
        }
        return $this->render('terrain/Update.html.twig',['form' => $form->createView()]);
    }


    /**
     * @param TerrainRepository $repository
     * @return Response
     * @Route ("/Terrains", name="TerrainsClient")
     */
    public function AfficheClient(TerrainRepository  $repository){

        $terrains = $repository->findAll();
        return $this->render('front/terrain.html.twig');
    }

}
