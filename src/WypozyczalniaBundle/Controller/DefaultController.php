<?php

namespace WypozyczalniaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WypozyczalniaBundle:Default:index.html.twig');
    }
}
