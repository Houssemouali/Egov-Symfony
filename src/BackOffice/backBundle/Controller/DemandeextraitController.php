<?php

namespace BackOffice\backBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackOffice\backBundle\Entity\Demandeextrait;
use BackOffice\backBundle\Form\DemandeextraitType;

/**
 * Demandeextrait controller.
 *
 */
class DemandeextraitController extends Controller {

    /**
     * Lists all Demandeextrait entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackOfficebackBundle:Demandeextrait')->findAll();

        return $this->render('BackOfficebackBundle:Demandeextrait:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Demandeextrait entity.
     *
     */
    public function createAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $entity = new Demandeextrait();

        $entity->setNom($request->get('nom'));
        $entity->setPrenom($request->get('prenom'));
        $entity->setLieuNaissance($request->get('lieu'));
        $cin = $em->getRepository('BackOfficebackBundle:Cin')->findOneBy(array('numCin'=>$request->get('mere')));
        $entity->setCinMere($cin);
        $cin = $em->getRepository('BackOfficebackBundle:Cin')->findOneBy(array('numCin'=>$request->get('pere')));
        $entity->setCinPere($cin);
        $entity->setCommentaire("");
        $entity->setEtat("En Cours");

        $entity->setDateNaissance(new \DateTime($request->get('date')));
        $em->persist($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('demandeextrait_show'));
    }

    /**
     * Creates a form to create a Demandeextrait entity.
     *
     * @param Demandeextrait $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Demandeextrait $entity) {
        $form = $this->createForm(new DemandeextraitType(), $entity, array(
            'action' => $this->generateUrl('demandeextrait_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Demandeextrait entity.
     *
     */
    public function newAction() {
        $entity = new Demandeextrait();
        $form = $this->createCreateForm($entity);

        return $this->render('BackOfficebackBundle:Demandeextrait:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Demandeextrait entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:Demandeextrait')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandeextrait entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficebackBundle:Demandeextrait:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Demandeextrait entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:Demandeextrait')->find($id);
        $entity->setCommentaire("refusé");

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandeextrait entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        
        return $this->render('BackOfficebackBundle:Demandeextrait:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
        remove($entity);
    }

    /**
     * Creates a form to edit a Demandeextrait entity.
     *
     * @param Demandeextrait $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Demandeextrait $entity) {
        $form = $this->createForm(new DemandeextraitType(), $entity, array(
            'action' => $this->generateUrl('demandeextrait_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Demandeextrait entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:Demandeextrait')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demandeextrait entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('demandeextrait_edit', array('id' => $id)));
        }

        return $this->render('BackOfficebackBundle:Demandeextrait:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Demandeextrait entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackOfficebackBundle:Demandeextrait')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Demandeextrait entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('demandeextrait'));
    }

    /**
     * Creates a form to delete a Demandeextrait entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('demandeextrait_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
