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
 * Description of AutorisationController
 *
 * @author lenovo
 */
class AutorisationController extends Controller {

    public function AddAutoFrontAction(Request $requete) {
        if ($requete->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $m1 = new Autorisationcirculation();
            $cin = $em->getRepository("EgovMainBundle:Cin")->findOneBy(array('numCin' => $requete->get("Cin")));
            $m1->setCin($cin);
            $m1->setCarteGrise($requete->get("CarteGrise"));
            $cpp = $em->getRepository("EgovMainBundle:Compte")->findOneBy(array('numCompte' => $requete->get("Cpp")));
            $m1->setCpp($cpp);
            $m1->setFinAutorisation($requete);
            $m1->setEtat("En Cours");
            $m1->setCommentaire("");
            $em->persist($m1);
            $em->flush();
            $this->render('EgovMainBundle:FrontOffice:ajoutauto.html.twig', array());
        }
        return $this->render('EgovMainBundle:FrontOffice:ajoutauto.html.twig', array());
    }

    public function AddAutoBackAction(Request $requete) {
        
        if ($requete->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $m1 = new Autorisationcirculation();
            $cin = $em->getRepository("EgovMainBundle:Cin")->findOneBy(array('numCin' => $requete->get("Cin")));
            $m1->setCin($cin);
            $m1->setCarteGrise($requete->get("CarteGrise"));
            $cpp = $em->getRepository("EgovMainBundle:Compte")->findOneBy(array('numCompte' => $requete->get("Cpp")));
            $m1->setCpp($cpp);
            $m1->setFinAutorisation($requete);
            $m1->setEtat("En Cours");
            $m1->setCommentaire("");
            $em->persist($m1);
            $em->flush();
            $this->render('EgovMainBundle:BackOffice:addauto.html.twig', array());
        }
        return $this->render('EgovMainBundle:BackOffice:addauto.html.twig', array());
    }

    public function AddCINFrontAction(Request $requete) {
        if ($requete->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $m1 = new Cin();
            $extrait = $em->getRepository("EgovMainBundle:Extraitnaissances")->findOneBy(array(
                'nom' => $requete->get("nom"),
                'prenom' => $requete->get("prenom")));


            $m1->setExtrait($extrait);
            $m1->setDateCreation($requete);
            $m1->setNumCin($requete->get("Cin"));
            $m1->setProfession($requete->get("Profession"));
            $m1->setAdresse($requete->get("Adresse"));
            $m1->setLieuCreation($requete->get("lieucreation"));


           
            $em->persist($m1);
            $em->flush();
            $this->render('EgovMainBundle:FrontOffice:ajoutcin.html.twig', array());
        }
        return $this->render('EgovMainBundle:FrontOffice:ajoutcin.html.twig', array());
    }

    public function AddCINBackAction(Request $requete) {
        if ($requete->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $m1 = new Cin();
            $extrait = $em->getRepository("EgovMainBundle:Extraitnaissances")->findOneBy(array(
                'nom' => $requete->get("nom"),
                'prenom' => $requete->get("prenom")));


            $m1->setExtrait($extrait);
            $m1->setDateCreation($requete);
            $m1->setNumCin($requete->get("Cin"));
            $m1->setProfession($requete->get("Profession"));
            $m1->setAdresse($requete->get("Adresse"));
            $m1->setLieuCreation($requete->get("lieucreation"));


            
            $em->persist($m1);
            $em->flush();
            $this->render('EgovMainBundle:BackOffice:addcin.html.twig', array());
        }
        return $this->render('EgovMainBundle:BackOffice:addcin.html.twig', array());
    }
public function ListAutoBackAction(Request $request){
    $em=  $this->get('doctrine.orm.entity_manager');
    $dql="select a from EgovMainBundle:Autorisationcirculation a ORDER BY a.id DESC ";
    $query=$em->createQuery($dql);
    //$movies=$em->getRepository("EgovMainBundle:Autorisationcirculation")->findAll();
    $pagination  = $this->get('knp_paginator')->paginate(
        $query,
        $request->query->get('page', 1)/*page number*/,
        5/*limit per page*/
            );
        return $this->render('EgovMainBundle:BackOffice:listauto.html.twig',array('pagination' => $pagination));
       
    }
    
    //wtf att
    public function ListCinBackAction(Request $request){
    $em=  $this->get('doctrine.orm.entity_manager');
    $dql="select a from EgovMainBundle:Cin a ORDER BY a.id DESC ";
    $query=$em->createQuery($dql);
    //$movies=$em->getRepository("EgovMainBundle:Autorisationcirculation")->findAll();
    $pagination  = $this->get('knp_paginator')->paginate(
        $query,
        $request->query->get('page', 1)/*page number*/,
        2/*limit per page*/
            );
        return $this->render('EgovMainBundle:BackOffice:listCin.html.twig',array('pagination' => $pagination));
       
    }
    public function suppCinBackAction($id) {
     
     $em=$this->getDoctrine()->getManager();
     $m=$em->getRepository('EgovMainBundle:Cin')->find($id);
     $em->remove($m);
     $em->flush();
     return $this->redirectToRoute("egov_back_listcin_cin");}
    
      public function updateCinAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $cin = $em->getRepository("EgovMainBundle:Cin")->findOneBy(array('id' => ($request->get('ipt-id'))));
        if (!$cin) {
            return new \Symfony\Component\HttpFoundation\JsonResponse(array("success" => false));
        }
        $cin->setAdresse($request->get("ipt-adresse"));
        $cin->setProfession($request->get("ipt-profession"));
        $em->merge($cin);
        $em->flush();
        return new \Symfony\Component\HttpFoundation\JsonResponse(array("success" => true));
        
    }
    
    public function updateAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $auto = $em->getRepository("EgovMainBundle:Autorisationcirculation")->findOneBy(array('id' => ($request->get('ipt-id'))));
        if (!$auto) {
            return new \Symfony\Component\HttpFoundation\JsonResponse(array("success" => false));
        }
        $auto->setEtat($request->get("ipt-etat"));
        $auto->setCommentaire($request->get("ipt-comm"));
        $em->merge($auto);
        $em->flush();
        return new \Symfony\Component\HttpFoundation\JsonResponse(array("success" => true));
    }
    
   public function listfrontautosAction(){
     $em=$this->getDoctrine()->getManager(); 
   
    $factures=$em->getRepository("EgovMainBundle:Autorisationcirculation")->findAll();
    $pagination  = $this->get('knp_paginator')->paginate($factures,
        $this->get('request')->query->get('page', 1)/*page number*/,
        3/*limit per page*/
            );
    
        return $this->render('EgovMainBundle:FrontOffice:listAutos.html.twig',array("pagination"=>$pagination)); }
        
        
}
