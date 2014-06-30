<?php

namespace Home\Bundle\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeHomeBundle:Default:index.html.twig');
    }
}
