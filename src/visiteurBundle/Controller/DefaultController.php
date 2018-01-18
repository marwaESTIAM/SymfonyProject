<?php

namespace visiteurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('visiteurBundle:Default:index.html.twig');
    }
}
