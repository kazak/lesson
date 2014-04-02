<?php

namespace Lesson\DbaseBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Lesson\DbaseBundle\Entity\News;

/**
 * News controller.
 *
 */
class NewsController extends Controller
{

    /**
     * Lists all News entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('LessonDbaseBundle:News')->findAll();

        return $this->render('LessonDbaseBundle:News:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a News entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('LessonDbaseBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        return $this->render('LessonDbaseBundle:News:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
