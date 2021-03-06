<?php

namespace BackOffice\backBundle\Controller;

//namespace FOS\UserBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Tests\Encoder\BCryptPasswordEncoderTest;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use Symfony\Component\Security\Core\Tests\SecurityContextTest;
use BackOffice\backBundle\Entity\FosUser;
use BackOffice\backBundle\Form\FosUserType;

/**
 * FosUser controller.
 *
 */
class FosUserController extends Controller {

    /**
     * Lists all FosUser entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BackOfficebackBundle:FosUser')->findAll();

        return $this->render('BackOfficebackBundle:FosUser:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new FosUser entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new FosUser();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fosuser_show', array('id' => $entity->getId())));
        }

        return $this->render('BackOfficebackBundle:FosUser:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a FosUser entity.
     *
     * @param FosUser $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(FosUser $entity) {
        $form = $this->createForm(new FosUserType(), $entity, array(
            'action' => $this->generateUrl('fosuser_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new FosUser entity.
     *
     */
    public function newAction() {
        $entity = new FosUser();
        $form = $this->createCreateForm($entity);

        return $this->render('BackOfficebackBundle:FosUser:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    public function agentAction(Request $r) {

        if ($r->getMethod() == "POST") {
            $userManager = $this->get('fos_user.user_manager');
            $m1 = $userManager->createUser();

            $m1->setPlainPassword($r->get("pwd"));

 //$m1->setRoles($r->get("choix"));


            $m1->setUsername($r->get("username"));
            $m1->setEmail($r->get("email"));
            $m1->setEmailCanonical($r->get("email"));
            $m1->setUsernameCanonical($r->get("username"));


//$bcrypt = new Bcrypt(15);
//$hash = $bcrypt->hash($r->get("pwd"));
            // $m1->setPassword("pwd");
            //$m1->setPoste($r->get("poste"));
            $m1->setEnabled(true);
            $m1->setLocked(true);
            $m1->addRole($r->get("choix"));
            //$m1->setExpired(0);
            
            //$m1->setMovie($r->get("movie"));
           /* $m1->setCredentialsExpired(0);
            $m1->setSalt('nlqdcubrn8gk40k84s8cwwsks0ws0ck');
            $m1->setLastLogin(null);
            $m1->setConfirmationToken(null);
            $m1->setExpiresAt(null);
            $m1->setPasswordRequestedAt(null);
            $m1->setCredentialsExpireAt(null);
            //$m1->setExpiresAt(null);
            $m1->setNopass(000);*/
$userManager->updateUser($m1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($m1);
            $em->flush();
            //return new Response("nouveau review crée ".$m1->getId());
        }
        return $this->render("BackOfficebackBundle:FosUser:essai.html.twig");
    }

    /**
     * Finds and displays a FosUser entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:FosUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FosUser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficebackBundle:FosUser:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing FosUser entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:FosUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FosUser entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackOfficebackBundle:FosUser:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a FosUser entity.
     *
     * @param FosUser $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(FosUser $entity) {
        $form = $this->createForm(new FosUserType(), $entity, array(
            'action' => $this->generateUrl('fosuser_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing FosUser entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackOfficebackBundle:FosUser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find FosUser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('fosuser_edit', array('id' => $id)));
        }

        return $this->render('BackOfficebackBundle:FosUser:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a FosUser entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackOffi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find FosUser entity.');
            }

            $em->remove($entity);
            cebackBundle:FosUser;
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fosuser'));
    }

    /**
     * Creates a form to delete a FosUser entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('fosuser_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function blockAction($id) {

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("BackOfficebackBundle:FosUser")->findBy(array('locked' => '0'));
        $entities = $em->getRepository('BackOfficebackBundle:FosUser')->findAll();

        //$notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findAll();
        $user = $em->getRepository("BackOfficebackBundle:FosUser")->find($id);
        $user->setLocked(true);
        $em->persist($user);
        $em->flush();



        //$nbr=count($notifications);

        return $this->render("BackOfficebackBundle:FosUser:index.html.twig", array('users' => $users,
                    'entities' => $entities,));
    }

    public function deblockAction($id) {

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("BackOfficebackBundle:FosUser")->findBy(array('locked' => '0'));
        $entities = $em->getRepository('BackOfficebackBundle:FosUser')->findAll();

        //$notifications = $em->getRepository("TesseractMOOCBundle:Notification")->findAll();
        $user = $em->getRepository("BackOfficebackBundle:FosUser")->find($id);
        $user->setLocked(false);
        $em->persist($user);
        $em->flush();



        //$nbr=count($notifications);

        return $this->render("BackOfficebackBundle:FosUser:index.html.twig", array('users' => $users,
                    'entities' => $entities,));
    }

}
