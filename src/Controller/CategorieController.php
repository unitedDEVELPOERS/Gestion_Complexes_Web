<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
    /**
     * @return Response
     * @Route("/AfficheCategorie",name="AfficheCategorie")
     */
    public function Affiche(){
        $repo=$this->getDoctrine()->getRepository(Categorie::class);
        $Categorie=$repo->findAll();
        return $this->render('categorie/AfficheC.html.twig',['Categorie'=>$Categorie]);
    }
    /**
     * @Route("/SuppCategorie/{id}",name="df")
     */
    function Delete($id){
        $repo=$this->getDoctrine()->getRepository(Categorie::class);
        $Categorie=$repo->find($id);

        $em=$this->getDoctrine()->getManager();
        $em->remove($Categorie);
        $em->flush();
        return $this->redirectToRoute('AfficheCategorie');
    }

    /**
     * @param Request $request
     * @Route("Categorie/Add",name="adc")
     */
    function Add(Request $request){
        $Categorie=new Categorie();
        $form=$this->createForm(CategorieType::class,$Categorie);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Categorie);
            $em->flush();
            return $this->redirectToRoute('AfficheCategorie');
        }
        return $this->render('categorie/Add.html.twig',['formf'=>$form->createView()]);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/UpdateCategorie/{id}",name="af")
     */
    function update($id,Request $request){
        $repo=$this->getDoctrine()->getRepository(Categorie::class);
        $Categorie=$repo->find($id);
        $form=$this->createForm(CategorieType::class,$Categorie);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheCategorie');
        }
        return $this->render('categorie/Update.html.twig',['ff'=>$form->createView()]);

    }



}
