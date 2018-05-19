<?php

namespace Khairi\SNEspritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KhairiSNEspritBundle:Default:index.html.twig');
    }
}
