<?php

namespace Portfolio\HeaverStartHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorksController extends Controller
{
    public function worksAction()
    {
        return $this->render('HeavenStartHereBundle:Works:works.html.twig');
    }
}
