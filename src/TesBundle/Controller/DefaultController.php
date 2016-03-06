<?php

namespace TesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/login")
     */
    public function indexAction()
    {
        return $this->render('TesBundle:Default:index.html.twig');
    }
}
