<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request,MailerInterface $mailer): Response
    {  $form=$this->createForm(ContactType::class);
    $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $contact=$form->getData();
            $email = (new Email())
                ->from($contact['email'])
                ->to('complexsportiftunis@gmail.com')

                ->subject('you have reach US !')
                ->text($contact['message']);


            $mailer->send($email);
            return $this->redirectToRoute('contact');
        }
        return $this->render('front/contactus.html.twig',[
            'contactForm'=>$form->createView()
        ]);
    }
}
