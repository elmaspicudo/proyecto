<?php

namespace acme\sitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use acme\sitioBundle\Entity\widget;
use acme\sitioBundle\Form\widgetType;

/**
 * widget controller.
 *
 */
class widgetController extends Controller
{

    /**
     * Lists all widget entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sitioBundle:widget')->findAll();

        return $this->render('sitioBundle:widget:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new widget entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new widget();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('widget_show', array('id' => $entity->getId())));
        }

        return $this->render('sitioBundle:widget:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a widget entity.
     *
     * @param widget $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(widget $entity)
    {
        $form = $this->createForm(new widgetType(), $entity, array(
            'action' => $this->generateUrl('widget_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new widget entity.
     *
     */
    public function newAction()
    {
        $entity = new widget();
        $form   = $this->createCreateForm($entity);

        return $this->render('sitioBundle:widget:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a widget entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:widget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find widget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sitioBundle:widget:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing widget entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:widget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find widget entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sitioBundle:widget:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a widget entity.
    *
    * @param widget $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(widget $entity)
    {
        $form = $this->createForm(new widgetType(), $entity, array(
            'action' => $this->generateUrl('widget_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing widget entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:widget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find widget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('widget_edit', array('id' => $id)));
        }

        return $this->render('sitioBundle:widget:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a widget entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sitioBundle:widget')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find widget entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('widget'));
    }

    /**
     * Creates a form to delete a widget entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('widget_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
