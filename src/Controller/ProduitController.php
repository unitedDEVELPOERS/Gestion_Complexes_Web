<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="produit_index", methods={"GET"})
     */
    public function index(): Response
    {
        $produits = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    /**
     * @Route("/new", name="produit_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('produit_index');
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produit_show", methods={"GET"})
     */
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }









    /**
     * @Route("/{id}/edit", name="produit_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Produit $produit): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('produit_index');
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produit_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Produit $produit): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('produit_index');
    }








    /**
     * @Route("/AllProduit",name="AllProduit")
     */
    function AllProduit(NormalizerInterface $normalizer){
        $repo=$this->getDoctrine()->getRepository(Produit::class);
        $Produit=$repo->findAll();
        $jsonContent=$normalizer->normalize($Produit,'json',['groups'=>'Produit']);
        return new Response(json_encode($jsonContent));


    }
    /**

     * @Route("/ProduitId/{id}",name="ProduitId")
     */
    function ProduitId(Request $request,$id,NormalizerInterface $normalizer){
        $em=$this->getDoctrine()->getManager();

        $Produit=$em->getRepository(Produit::class)->find($id);
        $jsonContent=$normalizer->normalize($Produit,'json',['groups'=>'Produit']);
        return new Response(json_encode($jsonContent));

    }

    /**

     * @Route("/AddProduits",name="AddProduits")
     */
    function AddProduit(Request $request,NormalizerInterface $normalizer){
        $em=$this->getDoctrine()->getManager();
        $Produit=new Produit();
        $Produit->setType($request->get('type'));
        $Produit->setValide($request->get('valide'));
        $em->persist($Produit);
        $em->flush();
        $jsonContent=$normalizer->normalize($Produit,'json',['groups'=>'Produit']);
        return new Response(json_encode($jsonContent));


    }
    /**

     * @Route("/UpdateProduit/{id}",name="UpdateProduit")
     */
    function UpdateProduit(Request $request,$id,NormalizerInterface $normalizer){
        $em=$this->getDoctrine()->getManager();
        $Produit=$em->getRepository(Produit::class)->find($id);
        $Produit->setType($request->get('type'));
        $Produit->setValide($request->get('valide'));

        $em->flush();
        $jsonContent=$normalizer->normalize($Produit,'json',['groups'=>'Produit']);
        return new Response("Updated successfully".json_encode($jsonContent));


    }
    /**

     * @Route("/DeleteProduit/{id}",name="DeleteProduit")
     */
    function DeleteProduit(Request $request,$id,NormalizerInterface $normalizer){
        $em=$this->getDoctrine()->getManager();
        $Produit=$em->getRepository(Produit::class)->find($id);
        $em->remove($Produit);

        $em->flush();
        $jsonContent=$normalizer->normalize($Produit,'json',['groups'=>'Produit']);
        return new Response("Deleted successfully".json_encode($jsonContent));


    }



}
