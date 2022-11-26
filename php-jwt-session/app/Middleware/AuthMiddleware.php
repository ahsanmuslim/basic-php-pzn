<?php

namespace BasicPhpPzn\PhpJwtSession\Middleware;

require_once __DIR__ . '/../Config/config.php';

use BasicPhpPzn\PhpJwtSession\Helper\Access;
use BasicPhpPzn\PhpJwtSession\Helper\Flasher;
use BasicPhpPzn\PhpJwtSession\Helper\Session;
use const BasicPhpPzn\PhpJwtSession\Config\BASEURL;

class AuthMiddleware implements Middleware
{
    public function index(): void
    {
        $akses = new Access();
        if(! Session::getCurrentSession()){
            header('Location: ' . BASEURL . '/');
            Flasher::setFlash('Oppss !!', 'Anda belum login !', 'danger', '', '');
            exit();
        } 
        elseif (! $akses->UserAccessCheck() ) {
            header('Location: ' . BASEURL . '/blocked');
            exit();
        }
    }
}

    

