<?php

namespace Inter\CinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Inter\CinBundle\Entity\Mail;
use Inter\CinBundle\Form\MailType;


class MailController extends Controller {

    public function indexAction() {
        return $this->render('InterCinBundle:Mail:index.html.twig', array());
    }

    public function newAction() {
       
        $mail = new Mail();
        $form = $this->container->get('form.factory')->create(new \Inter\CinBundle\Form\MailType(), $mail);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $this->SendMailAction('houssem.ouali@gmail.com', $mail->getFromm(), $mail->getNom(), $mail->getText());
            }
        }
        return $this->render('InterCinBundle:Mail:new.html.twig', array('form' => $form->createView()));
    }

    public function SendMailAction(Request $request) {
        $to = "houssem.ouali@gmail.com";
        $mail = new Mail();
       $form = $this->createForm(new MailType(), $mail);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                        ->setSubject($mail->getNom())
                        ->setFrom($mail->getFromm())
                        ->setTo($to)
                        ->setBody($mail->getText());
                $this->get('mailer')->send($message);
                return $this->render('InterCinBundle:Mail:mail.html.twig', array('to' => $to,
                            'fromm' => $mail->getFromm()
                ));
            }
        }
        return $this->redirect($this->generateUrl('my_app_mail_form'));
    }

}
