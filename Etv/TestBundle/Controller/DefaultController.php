<?php

namespace Etv\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EtvTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
