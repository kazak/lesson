<?php

namespace Lesson\StartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function indexAction($page)
    {
        return $this->render('LessonStartBundle:News:index.html.twig', array('name' => $page));
    }
}
