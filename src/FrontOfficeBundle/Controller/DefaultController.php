<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index1Action($name)
    {
        return $this->render('FrontOfficeBundle:Default:index.html.twig', array('name' => $name));
    }
}
