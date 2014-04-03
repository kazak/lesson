<?php

namespace Lesson\StartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $right_menu = 0 ;
        return $this->render('LessonStartBundle:Default:index.html.twig', array(
            'right_menu' => $right_menu));
    }
}
