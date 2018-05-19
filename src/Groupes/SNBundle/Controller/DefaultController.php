<?php

namespace Groupes\SNBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GroupesSNBundle:Default:index.html.twig');
    }
}
