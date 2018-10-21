<?php

namespace CompteCPBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use CompteCPBundle\Entity\Demande;
use CompteCPBundle\Entity\Compte;
use CompteCPBundle\Form\DemandeType;

/**
 * Demande controller.
 *
 * @Route("/demande")
 */
class DemandeController extends Controller {

    /**
     * Lists all Demande entities.
     *
     * @Route("/", name="demande")
     * @Method("GET")
     * @Template()
     */
    public function indexCPPAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompteCPBundle:Demande')->findBy(array('type' => "CPP"));

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Lists all Demande entities.
     *
     * @Route("/", name="demande")
     * @Method("GET")
     * @Template()
     */
    public function indexB3Action() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompteCPBundle:Demande')->findBy(array('type' => "B3"));

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Lists all Demande entities.
     *
     * @Route("/", name="demande")
     * @Method("GET")
     * @Template()
     */
    public function indexCinAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompteCPBundle:Demande')->findBy(array('type' => "CIN"));

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Lists all Demande entities.
     *
     * @Route("/", name="demande")
     * @Method("GET")
     * @Template()
     */
    public function newCinAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CompteCPBundle:Demande')->find($id);

        return array(
            'entities' => $entities,
        );
    }

    public function newCPPAction() {
        $entity = new Demande();
        $em = $this->getDoctrine()->getManager();
        $cin = $em->getRepository('CompteCPBundle:Cin')->find(1);
        $entity->setCin($cin);
        $entity->setEtat("En Cours");
        $entity->setType("CPP");
        $entity->setCommentaire("");
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('compte_cp_firas'));
    }

    /**
     * Edits an existing Demande entity.
     *
     * @Route("/{id}", name="demande_update")
     * @Method("PUT")
     * @Template("CompteCPBundle:Demande:edit.html.twig")
     */
    public function validerAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompteCPBundle:Demande')->find($id);
        $entity->setEtat("Valide");
        $compte = new Compte();
        if ($entity->getType() === "CPP") {
            $cin = $em->getRepository('CompteCPBundle:Cin')->find($entity->getCin());
            $compte->setCin($cin);
            $compte->setMontant(0);
            $carte = "5359";

            $carte = $carte . rand(0, 9999);
            $carte = $carte . rand(0, 9999);
            $carte = $carte . rand(0, 9999);
            $compte->setNumCompte($carte);
            $em->persist($compte);
            $em->flush();
            return $this->redirect($this->generateUrl('demande_ccp'));
        } else {
            return $this->redirect($this->generateUrl('demande_b3'));
        }
    }

    public function validerCinAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CompteCPBundle:Demande')->find($id);
        $entity->setEtat("Valide");
        $request = $this->get('request');
        $cin = $entity->getCin();
        $cin->setLieuCreation($request->get('lieu'));
        $cin->setDateCreation(new \DateTime($request->get('date')));
        $em->persist($cin);
        $em->flush();

        $em->persist($cin);
        $em->flush();


        return $this->redirect($this->generateUrl('demande_cin'));
    }

}
