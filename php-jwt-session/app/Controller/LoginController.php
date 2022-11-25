<?php

namespace BasicPhpPzn\PhpJwtSession\Controller;

use BasicPhpPzn\PhpJwtSession\App\Controller;
use BasicPhpPzn\PhpJwtSession\Helper\Flasher;
use const BasicPhpPzn\PhpJwtSession\Config\BASEURL;

class LoginController extends Controller 
{ 
    public function index() : void
    {
        if (isset($_SESSION['useractive'])) {
            header('Location: ' . BASEURL . '/home');
        } else {
            $data['title'] = "PHP MVC - Login";
            $this->view('Auth/index', $data);
        }
    }

    public function login() : void
    {
        if($this->model('User')->cekUser($_POST) > 0){
            

            header('Location: ' . BASEURL . '/home');
        } else {
            Flasher::setFlash('Login Gagal !!', 'Username / password Anda salah', 'danger', '', '');
            header('Location: ' . BASEURL . '/');
        }
    }

    public function logout() : void
    {
        session_destroy();
        header('Location: ' . BASEURL . '/');
    }
}