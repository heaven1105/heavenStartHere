<?php

namespace Portfolio\HeaverStartHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    public function aboutAction()
    {
        return $this->render('HeavenStartHereBundle:About:about.html.twig');
    }
}
