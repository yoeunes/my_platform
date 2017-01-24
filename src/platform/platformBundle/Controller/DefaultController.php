<?php

namespace platform\platformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('platformplatformBundle:Default:index.html.twig', array('name' => $name));
    }
}
