<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BackOffice\backBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\backBundle\Entity\FosUser;

/**
 * Description of FosController
 *
 * @author iheb
 */
class FosController {
    
   
public function  showAction()
    {
        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository("BackOfficebackBundle:FosUser")->findAll();
        return $this->render("BackOfficebackBundle:Fos:show.html.twig",array("modele"=>$modeles));
        
        
    }
    
    
    
}
