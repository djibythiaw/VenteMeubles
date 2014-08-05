<?php

namespace Vm\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VmUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
