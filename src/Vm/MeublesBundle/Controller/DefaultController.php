<?php

namespace Vm\MeublesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VmMeublesBundle:Vm:index.html.twig');
    }

    public function shopAction()
    {
        return $this->render('VmMeublesBundle:Vm:shop.html.twig');
    }

    public function detailsAction()
    {
        return $this->render('VmMeublesBundle:Vm:product-details.html.twig');
    }
}
