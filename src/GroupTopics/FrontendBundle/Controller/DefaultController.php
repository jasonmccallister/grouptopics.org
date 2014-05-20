<?php

namespace GroupTopics\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GroupTopicsFrontendBundle:Default:index.html.twig');
    }
}
