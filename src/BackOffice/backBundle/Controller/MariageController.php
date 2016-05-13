<?php

namespace BackOffice\backBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BackOffice\backBundle\Entity\Mariage;
use BackOffice\backBundle\Form\MariageType;

/**
 * Mariage controller.
 *
 */
class MariageController extends Controller
{

    /**
     * Lists all Mariage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackOfficebackBundle:Mariage')->findAll();

        return $this->render('BackOfficebackBundle:Mariage:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Mariage entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Mariage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('mariage_show', array('id' => $entity->getId())));
        }

        return $this->render('BackOfficebackBundle:Mariage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Mariage entity.
     *
     * @param Mariage $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Mariage $entity)
    {
        $form = $this->createForm(new MariageType(), $entity, array(
            'action' => $this->generateUrl('mariage_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Mariage entity.
     *
     */
    public function newAction()
    {
        $entity = new Mariage();
        $form   = $this->createCreateForm($entity);

        return $this->render('BackOfficebackBundle:Mariage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Mariage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:Mariage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mariage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficebackBundle:Mariage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Mariage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:Mariage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mariage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficebackBundle:Mariage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Mariage entity.
    *
    * @param Mariage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Mariage $entity)
    {
        $form = $this->createForm(new MariageType(), $entity, array(
            'action' => $this->generateUrl('mariage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Mariage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:Mariage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mariage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('mariage_edit', array('id' => $id)));
        }

        return $this->render('BackOfficebackBundle:Mariage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Mariage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackOfficebackBundle:Mariage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Mariage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('mariage'));
    }

    /**
     * Creates a form to delete a Mariage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mariage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
