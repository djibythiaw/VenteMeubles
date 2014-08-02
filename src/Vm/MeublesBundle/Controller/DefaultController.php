<?php

namespace Vm\MeublesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VmMeublesBundle:Default:index.html.twig', array('name' => $name));
    }
}
