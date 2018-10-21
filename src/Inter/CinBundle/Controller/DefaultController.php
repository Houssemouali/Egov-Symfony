<?php

namespace Inter\CinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InterCinBundle:Default:index.html.twig', array('name' => $name));
    }
}
