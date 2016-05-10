<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BackOffice\backBundle\Entity\ExtraitNaissance;
use BackOffice\backBundle\Form\ExtraitNaissanceType;

/**
 * ExtraitNaissance controller.
 *
 * @Route("/extraitnaissance"),
 */
class ExtraitNaissanceController extends Controller
{

    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:ExtraitNaissance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExtraitNaissance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    
}
