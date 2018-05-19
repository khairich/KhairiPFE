<?php

namespace Khairi\SNEspritBundle\Controller;

use Khairi\SNEspritBundle\Entity\Competence;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Competence controller.
 *
 */
class CompetenceController extends Controller
{
    /**
     * Lists all competence entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        echo($user);
       // $user = $this->container->get('security.context')->getToken()->getUser()->getId();
        $etudiant = $em->getRepository('BackendBundle:User')->find($user);
        $ex = $em->getRepository('KhairiSNEspritBundle:Competence')->find($etudiant->getId());
        $competences = $em->getRepository('KhairiSNEspritBundle:Competence')->findBy(array('id' => $ex));

        return $this->render('competence/index.html.twig', array(
            'competences' => $competences,
        ));
    }

    /**
     * Creates a new competence entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
       

        $competence = new Competence();
     
        $form = $this->createForm('Khairi\SNEspritBundle\Form\CompetenceType', $competence);
   
        $form->handleRequest($request);
    
           $user = $this->get('security.token_storage')->getToken()->getUser();
           // echo($user);
            $competence->setIdUser($user);
           // $form->add('idUser');
      
        if ($form->isSubmitted() && $form->isValid()) {
            
           

            $em = $this->getDoctrine()->getManager();
            $em->persist($competence);
            $em->flush($competence);

            return $this->redirectToRoute('competence_show', array('id' => $competence->getId()));
        }

        return $this->render('competence/new.html.twig', array(
            'competence' => $competence,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a competence entity.
     *
     */
    public function showAction(Competence $competence)
    {
        $deleteForm = $this->createDeleteForm($competence);

        return $this->render('competence/show.html.twig', array(
            'competence' => $competence,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing competence entity.
     *
     */
    public function editAction(Request $request, Competence $competence)
    {
        $deleteForm = $this->createDeleteForm($competence);
        $editForm = $this->createForm('Khairi\SNEspritBundle\Form\CompetenceType', $competence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('competence_edit', array('id' => $competence->getId()));
        }

        return $this->render('competence/edit.html.twig', array(
            'competence' => $competence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /*SEARCH ACTION juste join bin les 2 table bich taffichi les skills :) */

    public function RechercheAction() {

      

      // $em = $this->getEntityManager();
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
      //  echo($user);

        $etudiant = $em->getRepository('BackendBundle:User')->find($user);
        $ex = $em->getRepository('KhairiSNEspritBundle:Competence')->find($etudiant->getId());
        $competences = $em->getRepository('KhairiSNEspritBundle:Competence')->findAll();
       
      
            $dql  ="SELECT c.id_user_id , t.name From tag t
                    INNER JOIN competence_tag ct on t.id = ct.tag_id 
                    INNER JOIN competence c on ct.competence_id = c.id_user_id ;" ;
           $statement = $em->getConnection()->prepare($dql);
           $statement->execute();
   //The $skillt variable should contain an associative array with 5 rows of the database
           $skill = $statement->fetchAll();

        return $this->render('competence/Recherche.html.twig', array(
           'etudiant'=>$etudiant,
            'competences' => $skill,
        ));
    


       }
    /**
     * Deletes a competence entity.
     *
     */
    public function deleteAction(Request $request, Competence $competence)
    {
        $form = $this->createDeleteForm($competence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($competence);
            $em->flush($competence);
        }

        return $this->redirectToRoute('competence_index');
    }

    /**
     * Creates a form to delete a competence entity.
     *
     * @param Competence $competence The competence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Competence $competence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('competence_delete', array('id' => $competence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
