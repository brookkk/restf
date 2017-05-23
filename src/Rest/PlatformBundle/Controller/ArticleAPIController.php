<?php

namespace Rest\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleAPIController extends Controller
{
    public function indexAction()
    {
        return $this->render('RestPlatformBundle:Default:index.html.twig');
    }
}
