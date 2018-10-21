<?php

namespace Egov\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
         return $this->render('EgovMainBundle:FrontOffice:indus.html.twig', array());
    }
}
