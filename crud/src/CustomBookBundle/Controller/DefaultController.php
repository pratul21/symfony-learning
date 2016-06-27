<?php

namespace CustomBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CustomBookBundle:Default:index.html.twig');
    }
}
