<?php

namespace Lesson\StartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($language)
    {
        $right_menu = 0 ;
        return $this->render('LessonStartBundle:Default:index.html.twig', array('name' => $language,
            'right_menu' => $right_menu));
    }
}
