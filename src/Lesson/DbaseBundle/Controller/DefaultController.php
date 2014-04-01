<?php

namespace Lesson\DbaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LessonDbaseBundle:Default:index.html.twig', array('name' => $name));
    }
}
