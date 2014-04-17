<?php

namespace Acme\NewsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\NewsBundle\Entity\News;

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

        $entities = $em->getRepository('AcmeNewsBundle:News')->findAll();

        return $this->render('AcmeNewsBundle:News:index.html.twig', array(
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

        $entity = $em->getRepository('AcmeNewsBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        return $this->render('AcmeNewsBundle:News:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
