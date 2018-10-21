<?php

namespace CompteCPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('CompteCPBundle:Firas:firas.html.twig');
    }

    public function indexCommentAction() {
        return $this->render('CompteCPBundle:Firas:commentaire.html.twig');
    }

    public function aboutAction() {

        return $this->render('CompteCPBundle:Firas:About.html.twig');
    }
    
    public function BackofficeAction(){
        return $this->render("CompteCPBundle::Base.html.twig");
        
    }

}
