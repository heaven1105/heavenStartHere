<?php

namespace Portfolio\HeaverStartHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //set html headers to cache
        return $this->render('HeavenStartHereBundle:Default:index.html.twig');
    }

    public function headerAction()
    {
        return $this->render('HeavenStartHereBundle::header.html.twig');
    }

    public function footerAction()
    {
        return $this->render('HeavenStartHereBundle::footer.html.twig');
    }
}
