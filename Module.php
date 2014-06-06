<?php

namespace Stuki\CloudFlare;

use Zend\ModuleManager\ModuleManager;

class Module
{
    private $eventManager;

    public function init(ModuleManager $manager)
    {
        if(isset($_SERVER['HTTP_CF_CONNECTING_IP']))
        {
            $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }

        if(isset($_SERVER['HTTP_CF_VISITOR']))
        {
            $visitor = json_decode($_SERVER['HTTP_CF_VISITOR']);

            if($visitor->scheme === 'https')
            {
                $_SERVER['HTTPS'] = 'on';
                $_SERVER['HTTP_X_FORWARDED_PROTO'] = 'https';
            }
        }
    }
}
