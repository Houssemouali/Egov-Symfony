<?php

namespace CompteCPBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CompteCPBundle\Entity\Compte;
use CompteCPBundle\Form\CompteType;

/**
 * Compte controller.
 *
 */
class CompteController extends Controller {

    /**
     * Lists all Compte entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        //$user = $this->container->get('security.context')->getToken()->getUser();
        //$compte = $em->getRepository('CompteCPBundle:Compte')->findBy(array('cin'=>$user->getCin()));
        $compte = $em->getRepository('CompteCPBundle:Compte')->find(0);////////////////////////////////////////////////////////////
        if (!$compte) {
            $compte=new Compte();
            $compte->setNumCompte(-1);
        }
        return $this->render('CompteCPBundle:Compte:index.html.twig', array(
                    'compte' => $compte,
        ));
    }

}
