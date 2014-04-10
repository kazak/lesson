<?php

namespace Acme\StartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeStartBundle:Default:index.html.twig');
    }
}
