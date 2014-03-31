<?php

namespace Dbase\DbaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DbaseDbaseBundle:Default:index.html.twig', array('name' => $name));
    }
}
