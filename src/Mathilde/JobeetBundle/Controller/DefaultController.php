<?php

namespace Mathilde\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MathildeJobeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
