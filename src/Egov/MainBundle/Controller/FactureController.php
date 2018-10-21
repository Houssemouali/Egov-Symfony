<?php
namespace Egov\MainBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Egov\MainBundle\Entity\Autorisationcirculation;
use Egov\MainBundle\Entity\Cin;
use Egov\MainBundle\Entity\Compte;
use Egov\MainBundle\Entity\Extraitnaissances;
use Egov\MainBundle\Entity\Facture;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FactureController
 *
 * @author lenovo
 */
class FactureController extends Controller {
     public function ajoutFacAction(Request $req)
     {
        if ($req->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $m1 = new Facture();
            $cin = $em->getRepository("EgovMainBundle:Cin")->findOneBy(array('numCin' => $req->get("cin")));
            $m1->setCin($cin);
            $m1->setMontant($req->get("Montant"));
            $m1->setType($req->get("Type"));
            $m1->setEtat($req->get("etat"));
            
            
            $m1->setPayeravant($req);
            
            $em->persist($m1);
            $em->flush();
            $this->render('EgovMainBundle:BackOffice:addfacture.html.twig', array());
        }
        return $this->render('EgovMainBundle:BackOffice:addfacture.html.twig', array());
    }
    public function listSTEGEAction(){
    
    $em=$this->getDoctrine()->getManager(); 
   
    $factures=$em->getRepository("EgovMainBundle:Facture")->findBy(array('type'=>'STEG'));
    $pagination  = $this->get('knp_paginator')->paginate($factures,
        $this->get('request')->query->get('page', 1)/*page number*/,
        1/*limit per page*/
            );
    
    return $this->render('EgovMainBundle:FrontOffice:listSTEG.html.twig',array("pagination"=>$pagination)); } 
    
    public function listSONEDEEAction(){
    
    $em=$this->getDoctrine()->getManager(); 
   
    $factures=$em->getRepository("EgovMainBundle:Facture")->findBy(array('type'=>'SONEDE'));
    $pagination  = $this->get('knp_paginator')->paginate($factures,
        $this->get('request')->query->get('page', 1)/*page number*/,
        1/*limit per page*/
            );
    
        return $this->render('EgovMainBundle:FrontOffice:listSONEDE.html.twig',array("pagination"=>$pagination)); }
        
   public function listSTEGBackAction(){
    
    $em=$this->getDoctrine()->getManager(); 
   
    $factures=$em->getRepository("EgovMainBundle:Facture")->findBy(array('type'=>'STEG'));
    $pagination  = $this->get('knp_paginator')->paginate($factures,
        $this->get('request')->query->get('page', 1)/*page number*/,
        2/*limit per page*/
            );
    
    return $this->render('EgovMainBundle:BackOffice:listfactures.html.twig',array("pagination"=>$pagination)); } 
    public function listSONEDEBackAction(){
    
    $em=$this->getDoctrine()->getManager(); 
   
    $factures=$em->getRepository("EgovMainBundle:Facture")->findBy(array('type'=>'SONEDE'));
    $pagination  = $this->get('knp_paginator')->paginate($factures,
        $this->get('request')->query->get('page', 1)/*page number*/,
        2/*limit per page*/
            );
    
    return $this->render('EgovMainBundle:BackOffice:listfacturess.html.twig',array("pagination"=>$pagination)); } 
    
    public function suppFacBackAction($id) {
     
     $em=$this->getDoctrine()->getManager();
     $m=$em->getRepository('EgovMainBundle:Facture')->find($id);
     $em->remove($m);
     $em->flush();
     return $this->redirectToRoute("egov_Back_listSteg");}
     
     
}
