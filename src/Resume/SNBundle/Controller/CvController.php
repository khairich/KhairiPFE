<?php

namespace Resume\SNBundle\Controller;

use Resume\SNBundle\Entity\Cv;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Cv controller.
 *
 */
class CvController extends Controller
{
    /**
     * Lists all cv entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        echo($user);
        $etudiant = $em->getRepository('BackendBundle:User')->find($user);
        $ex = $em->getRepository('ResumeSNBundle:Cv')->find($etudiant->getId());
        $cvs = $em->getRepository('ResumeSNBundle:Cv')->findBy(array('id' => $ex));


        return $this->render('cv/index.html.twig', array(
            'cvs' => $cvs,
        ));
    }

    /**
     * Creates a new cv entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cv = new Cv();
        $form = $this->createForm('Resume\SNBundle\Form\CvType', $cv);
        $form->handleRequest($request);
        $user = $this->get('security.token_storage')->getToken()->getUser();
           // echo($user);
            $cv->setIdUser($user);
           // $form->add('idUser');
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cv);
            $em->flush($cv);

            return $this->redirectToRoute('cv_show', array('id' => $cv->getId()));
        }

        return $this->render('cv/new.html.twig', array(
            'cv' => $cv,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cv entity.
     *
     */
    public function showAction(Cv $cv)
    {
        $deleteForm = $this->createDeleteForm($cv);

        return $this->render('cv/show.html.twig', array(
            'cv' => $cv,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cv entity.
     *
     */
    public function editAction(Request $request, Cv $cv)
    {
        $deleteForm = $this->createDeleteForm($cv);
        $editForm = $this->createForm('Resume\SNBundle\Form\CvType', $cv);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cv_edit', array('id' => $cv->getId()));
        }

        return $this->render('cv/edit.html.twig', array(
            'cv' => $cv,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cv entity.
     *
     */
    public function deleteAction(Request $request, Cv $cv)
    {
        $form = $this->createDeleteForm($cv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cv);
            $em->flush($cv);
        }

        return $this->redirectToRoute('cv_index');
    }

    /**
     * Creates a form to delete a cv entity.
     *
     * @param Cv $cv The cv entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cv $cv)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cv_delete', array('id' => $cv->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function PDFAction($id) {
       
        
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser()->getId();
        echo($user);
        $ex = $em->getRepository('BackendBundle:User')->find($user);
        $cvs = $em->getRepository('ResumeSNBundle:Cv')->findOneBy(array('id' => $ex->getId()));

        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('cv/pdf.html.twig', array('form' => $cvs));
        echo($html);
        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P', 'A4', 'fr');
        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');
        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);
        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $content = $html2pdf->Output('KHAIRI.pdf', true);
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename=Resume_Cv.pdf');
        return $response;
    }
}
