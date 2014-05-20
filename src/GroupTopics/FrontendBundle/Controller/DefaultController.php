<?php

namespace GroupTopics\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GroupTopicsFrontendBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('GroupTopicsFrontendBundle:Default:about.html.twig');
    }

    public function groupsAction()
    {
        return $this->render('GroupTopicsFrontendBundle:Default:groups.html.twig');
    }

    public function topicsAction()
    {
        return $this->render('GroupTopicsFrontendBundle:Default:topics.html.twig');
    }
}
