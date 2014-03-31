<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dbase\DbaseBundle\Entity\News;
use Symfony\Component\HttpFoundation\Response;
class NewsController extends Controller
{
    public function indexAction($page)
    {

        return $this->render('AdminAdminBundle:Default:index.html.twig', array('page' => $page));
    }

    public function getNewsFromPage($page)
    {

    }
}
