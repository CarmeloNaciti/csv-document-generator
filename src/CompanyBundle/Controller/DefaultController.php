<?php

namespace CompanyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CompanyBundle:Default:index.html.twig');
    }
}
