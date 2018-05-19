<?php

namespace Resume\SNBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ResumeSNBundle:Default:index.html.twig');
    }
}
