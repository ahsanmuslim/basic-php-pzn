<?php

namespace BasicPhpPzn\PhpMvc\Middleware;

require_once __DIR__ . '/../Config/config.php';

use BasicPhpPzn\PhpMvc\Helper\Flasher;
use const BasicPhpPzn\PhpMvc\Config\BASEURL;
use BasicPhpPzn\PhpMvc\Helper\Access;

class AuthMiddleware implements Middleware
{
    public function index(): void
    {
        if(!isset($_SESSION['useractive'])){
            header('Location: ' . BASEURL . '/');
            Flasher::setFlash('Oppss !!', 'Anda harus login terlebih dahulu !', 'danger', '', '');
            exit();
        } else {
            $akses = new Access();
            if (! $akses->UserAccessCheck() ) {
                header('Location: ' . BASEURL . '/blocked');
                exit();
            }
        }
    }
}

    

