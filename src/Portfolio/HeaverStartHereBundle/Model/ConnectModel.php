<?php

namespace Portfolio\HeaverStartHereBundle\Model;

use Symfony\Component\Security\Acl\Exception\Exception;

class ConnectModel
{
    protected $mailer;
    protected $mailBox;

    public function __construct($mailer, $mailBox)
    {
        $this->mailer = $mailer;
        $this->mailBox = $mailBox;
    }

    public function sendMail($data)
    {
        try {
            //test data
            $mailer = $this->mailer;

            $message = $mailer->createMessage()
                ->setSubject('You have new letter from your portfolio web site')
                ->setFrom($data['from'])
                ->setTo($this->mailBox)
                ->setBody($data['body'], 'text/html')//create twig for letter body
            ;

            $mailer->send($message);
        } catch (\Exception $e) {
            throw new \Exception('Send mail exception: ' . $e->getMessage());
        }
    }

}

