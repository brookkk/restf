<?php

namespace Rest\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RestPlatformBundle:Default:index.html.twig');
    }
}
