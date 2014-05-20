<?php

namespace GroupTopics\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GroupTopicsAccountBundle:Default:index.html.twig');
    }

    public function loginAction()
    {
        return $this->render('GroupTopicsAccountBundle:Default:login.html.twig');
    }

    public function signupAction()
    {
        return $this->render('GroupTopicsAccountBundle:Default:signup.html.twig');
    }
}
