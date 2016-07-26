<?php

namespace acme\sitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use acme\sitioBundle\Entity\tipoWidget;
use acme\sitioBundle\Form\tipoWidgetType;

/**
 * tipoWidget controller.
 *
 */
class tipoWidgetController extends Controller
{

    /**
     * Lists all tipoWidget entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sitioBundle:tipoWidget')->findAll();

        return $this->render('sitioBundle:tipoWidget:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tipoWidget entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tipoWidget();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipowidget_show', array('id' => $entity->getId())));
        }

        return $this->render('sitioBundle:tipoWidget:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tipoWidget entity.
     *
     * @param tipoWidget $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tipoWidget $entity)
    {
        $form = $this->createForm(new tipoWidgetType(), $entity, array(
            'action' => $this->generateUrl('tipowidget_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tipoWidget entity.
     *
     */
    public function newAction()
    {
        $entity = new tipoWidget();
        $form   = $this->createCreateForm($entity);

        return $this->render('sitioBundle:tipoWidget:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipoWidget entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:tipoWidget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipoWidget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sitioBundle:tipoWidget:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipoWidget entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:tipoWidget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipoWidget entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sitioBundle:tipoWidget:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tipoWidget entity.
    *
    * @param tipoWidget $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tipoWidget $entity)
    {
        $form = $this->createForm(new tipoWidgetType(), $entity, array(
            'action' => $this->generateUrl('tipowidget_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tipoWidget entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:tipoWidget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tipoWidget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipowidget_edit', array('id' => $id)));
        }

        return $this->render('sitioBundle:tipoWidget:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tipoWidget entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sitioBundle:tipoWidget')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tipoWidget entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipowidget'));
    }

    /**
     * Creates a form to delete a tipoWidget entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipowidget_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
