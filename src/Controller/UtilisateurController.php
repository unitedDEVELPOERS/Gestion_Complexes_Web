<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/utilisateur", name="utilisateur")
     */
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }

    /**
     * @return Response
     * @Route("/AfficheUtilisateur",name="AfficheUtilisateur")
     */
    public function Affiche(){
        $repo=$this->getDoctrine()->getRepository(Utilisateur::class);
        $Utilisateur=$repo->findAll();
        return $this->render('utilisateur/Affiche.html.twig',['Utilisateur'=>$Utilisateur]);
    }

    /**
     * @Route("/SuppUtilisateur/{id}",name="d")
     */
    function Delete($id){
        $repo=$this->getDoctrine()->getRepository(Utilisateur::class);
        $Utilisateur=$repo->find($id);

        $em=$this->getDoctrine()->getManager();
        $em->remove($Utilisateur);
        $em->flush();
        return $this->redirectToRoute('AfficheUtilisateur');
    }

    /**
     * @param Request $request
     * @Route("utilisateur/Add",name="ad")
     */
    function Add(Request $request){
        $Utilisateur=new Utilisateur();
        $form=$this->createForm(UtilisateurType::class,$Utilisateur);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Utilisateur);
            $em->flush();
            return $this->redirectToRoute('AfficheUtilisateur');
        }
        return $this->render('utilisateur/Add.html.twig',['form'=>$form->createView()]);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/UpdateUtilisateur/{id}",name="a")
     */
    function update($id,Request $request){
        $repo=$this->getDoctrine()->getRepository(Utilisateur::class);
        $Utilisateur=$repo->find($id);
        $form=$this->createForm(UtilisateurType::class,$Utilisateur);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheUtilisateur');
        }
        return $this->render('utilisateur/Update.html.twig',['f'=>$form->createView()]);

    }
}
