<?php

namespace Vm\MeublesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VmMeublesBundle:Vm:index.html.twig');
    }
}
