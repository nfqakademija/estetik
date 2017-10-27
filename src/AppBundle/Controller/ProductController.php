<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{
    /**
     * @Route("AppBundle:Product:index.html.twig")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Product:index.html.twig', array(
            // ...
        ));
    }

}

