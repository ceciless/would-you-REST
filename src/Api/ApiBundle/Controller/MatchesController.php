<?php

namespace Api\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Api\ApiBundle\Entity\Matches;
use Api\ApiBundle\Form\MatchesType;

/**
 * Matches controller.
 *
 */
class MatchesController extends Controller
{
    /**
     * Lists all Matches entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $matches = $em->getRepository('ApiBundle:Matches')->findAll();

        return $this->render('matches/index.html.twig', array(
            'matches' => $matches,
        ));
    }

    /**
     * Creates a new Matches entity.
     *
     */
    public function newAction(Request $request)
    {
        $match = new Matches();
        $form = $this->createForm('Api\ApiBundle\Form\MatchesType', $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($match);
            $em->flush();

            return $this->redirectToRoute('matchs_show', array('id' => $match->getId()));
        }

        return $this->render('matches/new.html.twig', array(
            'match' => $match,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Matches entity.
     *
     */
    public function showAction(Matches $match)
    {
        $deleteForm = $this->createDeleteForm($match);

        return $this->render('matches/show.html.twig', array(
            'match' => $match,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Matches entity.
     *
     */
    public function editAction(Request $request, Matches $match)
    {
        $deleteForm = $this->createDeleteForm($match);
        $editForm = $this->createForm('Api\ApiBundle\Form\MatchesType', $match);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($match);
            $em->flush();

            return $this->redirectToRoute('matchs_edit', array('id' => $match->getId()));
        }

        return $this->render('matches/edit.html.twig', array(
            'match' => $match,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Matches entity.
     *
     */
    public function deleteAction(Request $request, Matches $match)
    {
        $form = $this->createDeleteForm($match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($match);
            $em->flush();
        }

        return $this->redirectToRoute('matchs_index');
    }

    /**
     * Creates a form to delete a Matches entity.
     *
     * @param Matches $match The Matches entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Matches $match)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('matchs_delete', array('id' => $match->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
