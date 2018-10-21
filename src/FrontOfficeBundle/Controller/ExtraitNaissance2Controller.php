<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FrontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use BackOffice\backBundle\Entity\Demandeextrait;

class ExtraitNaissance2Controller extends \Symfony\Bundle\FrameworkBundle\Controller\Controller {

    public function newAction(Request $r) {

        if ($r->getMethod() == "POST") {
            $em = $this->getDoctrine()->getManager();
            $m1 = new Demandeextrait();

            $m1->setNom($r->get("nom"));
            $m1->setPrenom($r->get("prenom"));
            
            $cin = $em->getRepository('BackOfficebackBundle:Cin')->findOneBy(array('numCin' => $r->get("pere")));
            $m1->setCinPere($cin);
            
            $cin = $em->getRepository('BackOfficebackBundle:Cin')->findOneBy(array('numCin' => $r->get("mere")));
            $m1->setCinMere($cin);

            $m1->setLieuNaissance($r->get("lieu"));
            $m1->setDateNaissance(new \DateTime($r->get("date")));
            
            
            $m1->setCommentaire("vvv");
            $m1->setEtat("");
            $user = $this->container->get('security.context')->getToken()->getUser();
            
            $u = $em->getRepository('BackOfficebackBundle:FosUser')->find($user->getId());
            
            $m1->setUser($u);
            
            $em->persist($m1);
            $em->flush();
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
