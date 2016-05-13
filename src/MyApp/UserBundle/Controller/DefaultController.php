<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppUserBundle:Default:index.html.twig', array());
    }
    
    
    
    
    
 public function loginInscAction(){
        
        return $this->render('MyAppUserBundle:Default:loginInscription.html.twig');
    }
}
