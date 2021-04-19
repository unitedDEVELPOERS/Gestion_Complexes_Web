<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Entity\EquipeSearch;
use App\Entity\Matche;
use App\Form\EquipeSearchType;
use App\Form\EquipeType;
use Symfony\Component\Console\Color;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
class EquipeController extends AbstractController
{
    /**
     * @Route("/equipe", name="equipe")
     */
    public function index(): Response
    {
        return $this->render('front/equipe.html.twig');
    }
    /**
     * @Route("/calender", name="calender")
     */
    public function match(): Response
    {  $repo=$this->getDoctrine()->getRepository(Matche::class);
        $matches=$repo->findAll();
        $rdv=[];
        foreach ($matches as $match){
            $rdv []=[
                'id'=>$match->getId(),
                'start'=>$match->getDateMatch()->format('Y-m-d H:i:s'),
                'end'=>$match->getDateMatch()->format('Y-m-d H:i:s'),
                'title'=>"Match",




            ];

        }
        $data= json_encode($rdv);
        return $this->render('front/Equipe/match.html.twig',compact('data'));
    }

    /**
     * @return Response
     * @Route("/AfficheEquipe",name="AfficheEquipe")
     */
    public function Affiche(){
        $repo=$this->getDoctrine()->getRepository(Equipe::class);
        $Equipe=$repo->findAll();

        return $this->render('front/Equipe/Affiche.html.twig',['Equipe'=>$Equipe]);

    }

    /**
     * @Route("/Supp/{id}",name="deleteequipe")
     */
    function Delete($id){
        $repo=$this->getDoctrine()->getRepository(Equipe::class);
        $Equipe=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Equipe);
        $em->flush();
        return $this->redirectToRoute('AfficheEquipe');


    }


    /**
     * @param Request $request
     * @return Response
     * @Route("equipe/Add")
     */
    function Add(Request $request,MailerInterface $mailer){
        $Equipe=new Equipe();
     $form=$this->createForm(EquipeType::class,$Equipe);

     $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
     if($form->isSubmitted()&& $form->isValid())
     {
         $em=$this->getDoctrine()->getManager();
         $em->persist($Equipe);
         $em->flush();
         $email = (new Email())
             ->from('complexsportiftunis@gmail.com')
             ->to('achref.tirari@esprit.tn')

             ->subject('you have created a team!')
             ->text('Complexes Sportif Sending you E-mail to tell you that you have successfully created a team!');


         $mailer->send($email);
        return $this->redirectToRoute('AfficheEquipe');
     }
     return $this->render('front/Equipe/Add.html.twig',[
         'formequipe'=>$form->createView()
     ]);
    }
    /**
     * @Route("/update/{id}",name="updateequipe")
     */
    function update($id,Request $request){
        $repo=$this->getDoctrine()->getRepository(Equipe::class);
        $Equipe=$repo->find($id);
        $form=$this->createForm(EquipeType::class,$Equipe);
        $form->add('update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheEquipe');
        }
        return $this->render('front/Equipe/Update.html.twig',[
            'fequipe'=>$form->createView()
        ]);

    }
    /**
     * @Route("/fixture", name="fixture")
     */
    public function fixture(): Response
    {
        return $this->render('front/fixture.html.twig');
    }
    /**
     *@Route("/rechercherequipe",name="equiperecherche")
     */
    public function home(Request $request)
    {
        $propertySearch = new EquipeSearch();
        $form = $this->createForm(EquipeSearchType::class,$propertySearch);
        $form->handleRequest($request);
         $articles= [];

        if($form->isSubmitted() && $form->isValid()) {
           $nom = $propertySearch->getNom();
            if ($nom!="")
                //si on a fourni un nom d'article on affiche tous les articles ayant ce nom
                $articles= $this->getDoctrine()->getRepository(Equipe::class)->findBy(['nom' => $nom] );
            else
                //si si aucun nom n'est fourni on affiche tous les articles
                $articles= $this->getDoctrine()->getRepository(Equipe::class)->findAll();
        }
        return  $this->render('front/Equipe/recherche.html.twig',[ 'form' =>$form->createView(), 'Equipe' => $articles]);
    }

}
