<?php

namespace BasicPhpPzn\PhpMvc\Controller;

use BasicPhpPzn\PhpMvc\App\Controller;
use BasicPhpPzn\PhpMvc\Helper\Flasher;
use const BasicPhpPzn\PhpMvc\Config\BASEURL;

class LoginController extends Controller 
{
    public function index()
    {
        if (isset($_SESSION['useractive'])) {
            header('Location: ' . BASEURL . '/home');
        } else {
            $data['title'] = "PHP MVC - Login";
            $this->view('Auth/index', $data);
        }
    }

    public function login()
    {
        if($this->model('User')->cekUser($_POST) > 0){
            $_SESSION['useractive'] = $_POST['email'];

            header('Location: ' . BASEURL . '/home');
        } else {
            Flasher::setFlash('Login Gagal !!', 'Username / password Anda salah', 'danger', '', '');
            header('Location: ' . BASEURL . '/');
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASEURL . '/');
    }
}