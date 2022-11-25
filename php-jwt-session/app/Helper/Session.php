<?php

namespace BasicPhpPzn\PhpJwtSession\Helper;

use BasicPhpPzn\PhpJwtSession\App\Controller;

class Session 
{
    public static function jwtlogin(string $username, string $password): bool
    {
        if($this->model('User')->cekUser($_POST) > 0){
            $_SESSION['useractive'] = $_POST['email'];

            header('Location: ' . BASEURL . '/home');
        } else {
            Flasher::setFlash('Login Gagal !!', 'Username / password Anda salah', 'danger', '', '');
            header('Location: ' . BASEURL . '/');
        }
    }
}