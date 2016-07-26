<?php

namespace acme\sitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use acme\sitioBundle\Entity\template;
use acme\sitioBundle\Form\templateType;

/**
 * template controller.
 *
 */
class templateController extends Controller
{

    /**
     * Lists all template entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sitioBundle:template')->findAll();

        return $this->render('sitioBundle:template:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new template entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new template();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('template_show', array('id' => $entity->getId())));
        }

        return $this->render('sitioBundle:template:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a template entity.
     *
     * @param template $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(template $entity)
    {
        $form = $this->createForm(new templateType(), $entity, array(
            'action' => $this->generateUrl('template_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new template entity.
     *
     */
    public function newAction()
    {
        $entity = new template();
        $form   = $this->createCreateForm($entity);

        return $this->render('sitioBundle:template:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a template entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:template')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find template entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sitioBundle:template:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing template entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:template')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find template entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sitioBundle:template:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a template entity.
    *
    * @param template $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(template $entity)
    {
        $form = $this->createForm(new templateType(), $entity, array(
            'action' => $this->generateUrl('template_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing template entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:template')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find template entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('template_edit', array('id' => $id)));
        }

        return $this->render('sitioBundle:template:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a template entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sitioBundle:template')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find template entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('template'));
    }

    /**
     * Creates a form to delete a template entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('template_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
