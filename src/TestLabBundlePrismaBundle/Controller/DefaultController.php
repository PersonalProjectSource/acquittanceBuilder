<?php

namespace TestLabBundlePrismaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestLabBundlePrismaBundle:Default:index.html.twig');
    }
}
