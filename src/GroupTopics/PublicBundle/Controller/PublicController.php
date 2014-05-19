<?php

namespace SDPHP\Gt\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('GtPublicBundle:Default:index.html.twig');
    }

    public function signupAction()
    {
        return $this->render('GtPublicBundle:Default:signup.html.twig');
    }

    public function loginAction()
    {
        return $this->render('GtPublicBundle:Default:login.html.twig');
    }
}
