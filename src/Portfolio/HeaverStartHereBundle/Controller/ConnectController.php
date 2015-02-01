<?php

namespace Portfolio\HeaverStartHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConnectController extends Controller
{
    public function connectAction()
    {
        return $this->render('HeavenStartHereBundle:Connect:connect.html.twig');
    }
}
