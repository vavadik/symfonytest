<?php

namespace TestVendor\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestVendorTestBundle:Default:index.html.twig');
    }
}
