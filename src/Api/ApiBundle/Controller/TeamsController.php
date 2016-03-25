<?php

namespace Api\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Api\ApiBundle\Entity\Teams;
use Api\ApiBundle\Form\TeamsType;

/**
 * Teams controller.
 *
 */
class TeamsController extends Controller
{
    /**
     * Lists all Teams entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $teams = $em->getRepository('ApiBundle:Teams')->findAll();

        return $this->render('teams/index.html.twig', array(
            'teams' => $teams,
        ));
    }

    /**
     * Creates a new Teams entity.
     *
     */
    public function newAction(Request $request)
    {
        $team = new Teams();
        $form = $this->createForm('Api\ApiBundle\Form\TeamsType', $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();

            return $this->redirectToRoute('teams_show', array('id' => $team->getId()));
        }

        return $this->render('teams/new.html.twig', array(
            'team' => $team,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Teams entity.
     *
     */
    public function showAction(Teams $team)
    {
        $deleteForm = $this->createDeleteForm($team);

        return $this->render('teams/show.html.twig', array(
            'team' => $team,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Teams entity.
     *
     */
    public function editAction(Request $request, Teams $team)
    {
        $deleteForm = $this->createDeleteForm($team);
        $editForm = $this->createForm('Api\ApiBundle\Form\TeamsType', $team);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();

            return $this->redirectToRoute('teams_edit', array('id' => $team->getId()));
        }

        return $this->render('teams/edit.html.twig', array(
            'team' => $team,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Teams entity.
     *
     */
    public function deleteAction(Request $request, Teams $team)
    {
        $form = $this->createDeleteForm($team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($team);
            $em->flush();
        }
        return $this->redirectToRoute('teams_index');
    }



      /**
     * Finds and displays all matches entities of the team.
     *
     */
   public function matchsAction(Teams $team)
    {
       $em = $this->getDoctrine()->getManager();
       $matchs = $em->getRepository('ApiBundle:Matches')->byTeam($team);

        return $this->render('events/schedule.html.twig', array('matchs' => $matchs));

    }

    /**
     * Creates a form to delete a Teams entity.
     *
     * @param Teams $team The Teams entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Teams $team)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('teams_delete', array('id' => $team->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
