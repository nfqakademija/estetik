<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    public function indexAction()
    {
        return $this->render(':Product:index.html.twig', array(
            // ...
        ));
    }

}

