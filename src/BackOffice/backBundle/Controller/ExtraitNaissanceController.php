<?php

namespace BackOffice\backBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BackOffice\backBundle\Entity\Extraitnaissances;
use BackOffice\backBundle\Entity\Demandeextrait;
use BackOffice\backBundle\Form\ExtraitNaissanceType;

/**
 * ExtraitNaissance controller.
 *
 * @Route("/extraitnaissance")
 */
class ExtraitNaissanceController extends Controller {

    /**
     * Lists all ExtraitNaissance entities.
     *
     * @Route("/", name="extraitnaissance")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackOfficebackBundle:Extraitnaissances')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new ExtraitNaissance entity.
     *
     * @Route("/", name="extraitnaissance_create")
     * @Method("POST")
     * @Template("BackOfficebackBundle:ExtraitNaissance:new.html.twig")
     */
    public function createAction($id) {
        $entity = new Extraitnaissances();
        $entity1= new Demandeextrait();
        $entity1 = $em->getRepository('BackOfficebackBundle:Demandeextrait')->find($id);

        $entity->setNom($entity1->getNom());
        $entity->setPrenom($entity1->getPrenom());
       $cin = $em->getRepository('BackOfficebackBundle:Cin')->findOneBy(array('numCin'=>$entity1->get));
        $entity->setMere($cin);
        $cin = $em->getRepository('BackOfficebackBundle:Cin')->findOneBy(array('numCin'=>$request->get('pere')));
        $entity->setCinPere($cin);
        $entity->setSexe($entity1->get('sexe'));
        $entity->setVilleNaissance($entity1->get('ville'));
        $entity->setEtatCivile($entity1->get('etat'));
        $entity->setDateNaissance($entity1->get('date'));
        return $this->render("BackOfficebackBundle:frontOffice:b3dem.html.twig");


        return array(
            'entity' => $entity,
            'form' => $form->createView());
    }

    /**
     * Finds and displays a ExtraitNaissance entity.
     *
     * @Route("/{id}", name="extraitnaissance_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:Extraitnaissances')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExtraitNaissance entity.');
        }


        return $this->render('BackOfficebackBundle:Extraitnaissances:show.html.twig', array(
                    'entity' => $entity,
        ));
    }

    /**
     * Displays a form to edit an existing ExtraitNaissance entity.
     *
     * @Route("/{id}/edit", name="extraitnaissance_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:Extraitnaissances')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExtraitNaissance entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficebackBundle:ExtraitNaissance:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ExtraitNaissance entity.
     *
     * @Route("/{id}", name="extraitnaissance_update")
     * @Method("PUT")
     * @Template("BackOfficebackBundle:ExtraitNaissance:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:Extraitnaissances')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExtraitNaissance entity.');
        }




        $em->flush();

        return $this->redirect($this->generateUrl('back_officeback_extraitnaissance_edit', array('id' => $id)));


        return $this->render('BackOfficebackBundle:ExtraitNaissance:edit.html.twig', array(
                    'entity' => $entity,
        ));
    }

    /**
     * Deletes a ExtraitNaissance entity.
     *
     * @Route("/{id}", name="extraitnaissance_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {



        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BackOfficebackBundle:Extraitnaissances')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExtraitNaissance entity.');
        }

        $em->remove($entity);
        $em->flush();


        return $this->redirect($this->generateUrl('back_officeback_extraitnaissance'));
    }

}
