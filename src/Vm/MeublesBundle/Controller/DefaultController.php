<?php

namespace Vm\MeublesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$name = "Djiby";
        return $this->render('VmMeublesBundle:Vm:index.html.twig');
    }
}
