<?php

namespace MyApp\ProjetFinalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MyApp\ProjetFinalBundle\Entity\client;
use MyApp\ProjetFinalBundle\Form\clientType;

/**
 * client controller.
 *
 */
class clientController extends Controller
{

    /**
     * Lists all client entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppProjetFinalBundle:client')->findAll();

        return $this->render('MyAppProjetFinalBundle:client:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new client entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new client();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('client_show', array('id' => $entity->getId())));
        }

        return $this->render('MyAppProjetFinalBundle:client:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a client entity.
    *
    * @param client $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(client $entity)
    {
        $form = $this->createForm(new clientType(), $entity, array(
            'action' => $this->generateUrl('client_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new client entity.
     *
     */
    public function newAction()
    {
        $entity = new client();
        $form   = $this->createCreateForm($entity);

        return $this->render('MyAppProjetFinalBundle:client:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a client entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppProjetFinalBundle:client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find client entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppProjetFinalBundle:client:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing client entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppProjetFinalBundle:client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find client entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppProjetFinalBundle:client:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a client entity.
    *
    * @param client $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(client $entity)
    {
        $form = $this->createForm(new clientType(), $entity, array(
            'action' => $this->generateUrl('client_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing client entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppProjetFinalBundle:client')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find client entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('client_edit', array('id' => $id)));
        }

        return $this->render('MyAppProjetFinalBundle:client:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a client entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppProjetFinalBundle:client')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find client entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('client'));
    }

    /**
     * Creates a form to delete a client entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('client_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
