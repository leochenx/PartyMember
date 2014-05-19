<?php

namespace Ibw\PartymemberBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ibw\PartymemberBundle\Entity\Partymember;
use Ibw\PartymemberBundle\Form\PartymemberType;

/**
 * Partymember controller.
 *
 */
class PartymemberController extends Controller
{

    /**
     * Lists all Partymember entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IbwPartymemberBundle:Partymember')->findAll();

        return $this->render('IbwPartymemberBundle:Partymember:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Partymember entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Partymember();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ibw_partymember_show', array('id' => $entity->getId())));
        }

        return $this->render('IbwPartymemberBundle:Partymember:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Partymember entity.
    *
    * @param Partymember $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Partymember $entity)
    {
        $form = $this->createForm(new PartymemberType(), $entity, array(
            'action' => $this->generateUrl('ibw_partymember_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Partymember entity.
     *
     */
    public function newAction()
    {
        $entity = new Partymember();
        $form   = $this->createCreateForm($entity);

        return $this->render('IbwPartymemberBundle:Partymember:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Partymember entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IbwPartymemberBundle:Partymember')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partymember entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IbwPartymemberBundle:Partymember:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Partymember entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IbwPartymemberBundle:Partymember')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partymember entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IbwPartymemberBundle:Partymember:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Partymember entity.
    *
    * @param Partymember $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Partymember $entity)
    {
        $form = $this->createForm(new PartymemberType(), $entity, array(
            'action' => $this->generateUrl('ibw_partymember_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Partymember entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IbwPartymemberBundle:Partymember')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Partymember entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ibw_partymember_edit', array('id' => $id)));
        }

        return $this->render('IbwPartymemberBundle:Partymember:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Partymember entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IbwPartymemberBundle:Partymember')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Partymember entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ibw_partymember'));
    }

    /**
     * Creates a form to delete a Partymember entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ibw_partymember_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
