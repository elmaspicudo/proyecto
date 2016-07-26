<?php

namespace acme\sitioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use acme\sitioBundle\Entity\sitio;
use acme\sitioBundle\Form\sitioType;

/**
 * sitio controller.
 *
 */
class sitioController extends Controller
{

    /**
     * Lists all sitio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('sitioBundle:sitio')->findAll();

        return $this->render('sitioBundle:sitio:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new sitio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new sitio();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sitio_show', array('id' => $entity->getId())));
        }

        return $this->render('sitioBundle:sitio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a sitio entity.
     *
     * @param sitio $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(sitio $entity)
    {
        $form = $this->createForm(new sitioType(), $entity, array(
            'action' => $this->generateUrl('sitio_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new sitio entity.
     *
     */
    public function newAction()
    {
        $entity = new sitio();
        $form   = $this->createCreateForm($entity);

        return $this->render('sitioBundle:sitio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sitio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:sitio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find sitio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sitioBundle:sitio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sitio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:sitio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find sitio entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('sitioBundle:sitio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a sitio entity.
    *
    * @param sitio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(sitio $entity)
    {
        $form = $this->createForm(new sitioType(), $entity, array(
            'action' => $this->generateUrl('sitio_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing sitio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('sitioBundle:sitio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find sitio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sitio_edit', array('id' => $id)));
        }

        return $this->render('sitioBundle:sitio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a sitio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('sitioBundle:sitio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find sitio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sitio'));
    }

    /**
     * Creates a form to delete a sitio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sitio_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
