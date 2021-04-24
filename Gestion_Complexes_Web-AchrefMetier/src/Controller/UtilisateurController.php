<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\ProprietaireType;
use App\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

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
 * @Route("/inscrit", name="inscrit")
 */
    public function inscrit(): Response
    {
        return $this->render('inscrit/inscrit.html.twig');
    }
    /**
     * @return Response
     * @Route("/AfficheUtilisateur",name="AfficheUtilisateur")
     */
    public function Affiche(){
        $repo=$this->getDoctrine()->getRepository(Utilisateur::class);
        $Utilisateur=$repo->findAll();
        return $this->render('Admin/utilisateur/Affiche.html.twig',['Utilisateur'=>$Utilisateur]);
    }
    /**
     * @IsGranted("ROLE_PROP")
     * @return Response
     * @Route("/AfficheArbitre",name="AfficheArbitre")
     */
    public function Affichearbire(){
        $repo=$this->getDoctrine()->getRepository(Utilisateur::class);
        $Utilisateur=$repo->findAll();
        return $this->render('Admin/utilisateur/Affichearbitre.html.twig',['Utilisateur'=>$Utilisateur]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @return Response
     * @Route("/AfficheProp",name="AfficheProp")
     */
    public function AfficheProprietaire(){
        $repo=$this->getDoctrine()->getRepository(Utilisateur::class);
        $Utilisateur=$repo->findAll();
        return $this->render('admin/utilisateur/AfficheProprietaire.html.twig',['Utilisateur'=>$Utilisateur]);
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
     * @IsGranted("ROLE_PROP")
     * @param Request $request
     * @Route("/AjouterArbitre",name="ad")
     */
    function Add(Request $request,MailerInterface $mailer){
        $Utilisateur=new Utilisateur();
        $form=$this->createForm(UtilisateurType::class,$Utilisateur);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Utilisateur);
            $em->flush();$email = (new Email())
                ->from('complexsportiftunis@gmail.com')
                ->to('sahar.gharrad@esprit.tn')

                ->subject('you have created a user!')
                ->text('Complexes Sportif Sending you E-mail to tell you that you have successfully created an account!');


            $mailer->send($email);
            return $this->redirectToRoute('AfficheArbitre');
        }
        return $this->render('Admin/utilisateur/AjouterArbitre.html.twig',['form'=>$form->createView()]);
    }






    /**
     * @IsGranted("ROLE_ADMIN")
     * @param Request $request
     * @Route("/AjouterProp",name="ap")
     */
    function AddProp(Request $request,MailerInterface $mailer){
        $Utilisateur=new Utilisateur();
        $form=$this->createForm(ProprietaireType::class,$Utilisateur);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Utilisateur);
            $em->flush();$email = (new Email())
                ->from('complexsportiftunis@gmail.com')
                ->to('sahar.gharrad@esprit.tn')

                ->subject('you have created a user!')
                ->text('Complexes Sportif Sending you E-mail to tell you that you have successfully created an account!');


            $mailer->send($email);
            return $this->redirectToRoute('AfficheProp');
        }
        return $this->render('Admin/utilisateur/AjouterProprietaire.html.twig',['form'=>$form->createView()]);
    }

    /**
     * @IsGranted("ROLE_PROP")
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
            return $this->redirectToRoute('AfficheArbitre');
        }
        return $this->render('utilisateur/Update.html.twig',['f'=>$form->createView()]);

    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/UpdateProprietaire/{id}",name="updateProp")
     */
    function updateProp($id,Request $request){
        $repo=$this->getDoctrine()->getRepository(Utilisateur::class);
        $Utilisateur=$repo->find($id);
        $form=$this->createForm(ProprietaireType::class,$Utilisateur);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheProp');
        }
        return $this->render('admin/utilisateur/UpdateProprietaire.html.twig',['f'=>$form->createView()]);

    }
}
