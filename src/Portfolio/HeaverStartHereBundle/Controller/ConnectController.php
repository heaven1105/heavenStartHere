<?php

namespace Portfolio\HeaverStartHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ConnectController extends Controller
{
    public function connectAction()
    {
        return $this->render('HeavenStartHereBundle:Connect:connect.html.twig');
    }

    public function sendMail(Request $request){
        $data['from'] = $request->query->get('from');
        $data['name'] = $request->query->get('name');
        $data['body'] = $request->query->get('body');
    }
}
