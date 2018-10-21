<?php
namespace Inter\CinBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Inter\CinBundle\Controller\CinController;
use Inter\CinBundle\Entity\Cin;
use Inter\CinBundle\Entity\Extraitnaissances;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CinController
 *
 * @author USER
 */
class CinController extends Controller {
    
  public function AjoutCINFrontAction(Request $requete) {
        if ($requete->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $m1 = new Cin();
            $extrait = $em->getRepository("InterCinBundle:Extraitnaissances")->findOneBy(array(
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
            $this->render('InterCinBundle:FrontOffice:ajoutcin.html.twig', array());
        }
        return $this->render('InterCinBundle:FrontOffice:ajoutcin.html.twig', array());
    }
    public function ListCinBackAction(Request $request){
    $em=  $this->get('doctrine.orm.entity_manager');
    $dql="select a from InterCinBundle:Cin a ORDER BY a.id DESC ";
    $query=$em->createQuery($dql);
    //$movies=$em->getRepository("EgovMainBundle:Autorisationcirculation")->findAll();
    $pagination  = $this->get('knp_paginator')->paginate(
        $query,
        $request->query->get('page', 1)/*page number*/,
        2/*limit per page*/
            );
        return $this->render('InterCinBundle:BackOffice:listCin.html.twig',array('pagination' => $pagination));
       
    }
    public function suppCinBackAction($id) {
     
     $em=$this->getDoctrine()->getManager();
     $m=$em->getRepository('InterCinBundle:Cin')->find($id);
     $em->remove($m);
     $em->flush();
     return $this->redirectToRoute("egov_back_listcin_cine");}
    
      public function updateCinAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $cin = $em->getRepository("InterCinBundle:Cin")->findOneBy(array('id' => ($request->get('ipt-id'))));
        if (!$cin) {
            return new \Symfony\Component\HttpFoundation\JsonResponse(array("success" => false));
        }
        $cin->setAdresse($request->get("ipt-adresse"));
        $cin->setProfession($request->get("ipt-profession"));
        $em->merge($cin);
        $em->flush();
        return new \Symfony\Component\HttpFoundation\JsonResponse(array("success" => true));
        
    }
     public function backAction()
    {
        return $this->render('InterCinBundle:Backoffice:base.html.twig', array());
    }
}
