<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FrontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use BackOffice\backBundle\Entity\Extraitnaissances;

class ExtraitNaissance2Controller extends \Symfony\Bundle\FrameworkBundle\Controller\Controller {

    public function newAction(Request $r) {
        if ($r->getMethod() == "POST") {

            $m1 = new Extraitnaissances();

            $m1->setNom($r->get("nom"));
            $m1->setPrenom($r->get("prenom"));
            $m1->setPere($r->get("nom_pere"));
            $m1->setMere($r->get("nom_mere"));
            $m1->setVilleNaissance(new \DateTime($r->get("ville_naissance")));
            $m1->setDateNaissance($r->get("date_naissance"));
            $m1->setSexe($r->get("sex"));
            $m1->setSexe($r->get("etat"));
            $em = $this->getDoctrine()->getManager();
            $em->persist($m1);
            $em->flush();
           return new Response("nouveau demande crée ".$m1->getId());
        }
        return $this->render("FrontOfficeBundle:frontoff:demcin.html.twig");
    }

    public function listAction() {
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository("FrontOfficeBundle:ExtraitNaissance")->findAll();
        return $this->render("EspritExtraitBundle:Extrait:list2.html.twig", array("modele" => $modeles));
    }

    public function suppAction($id) {

        $em = $this->getDoctrine()->getManager();
        $m = $em->getRepository("EspritExtraitBundle:extrait")->find($id);
        $em->remove($m);
        $em->flush();
        return $this->redirectToRoute("esprit_extrait_list");
    }

    public function searchAction(Request $requete) {
        if ($requete->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $m1 = new extrait();
            $m1->setId($requete->get("id"));
            $CIN = $m1->getId();
            $modeles = $em->getRepository("EspritExtraitBundle:extrait")->findById($CIN);

            return $this->render('EspritExtraitBundle:Extrait:list.html.twig', array("modele" => $modeles));
        }
        return $this->render('EspritExtraitBundle:Extrait:search.html.twig', array());
    }

}
