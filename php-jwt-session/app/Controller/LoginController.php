<?php

namespace BasicPhpPzn\PhpJwtSession\Controller;

use BasicPhpPzn\PhpJwtSession\App\Controller;
use BasicPhpPzn\PhpJwtSession\Helper\Flasher;
use BasicPhpPzn\PhpJwtSession\Helper\Session;

class LoginController extends Controller 
{ 
    public function index() : void
    {
        if(Session::getCurrentSession()){
            header('Location: ' . BASEURL . '/home');
        } else {
            $data['title'] = "PHP MVC - Login";
            $this->view('Auth/index', $data);
        }
    }

    public function login() : void
    {
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $session = new Session();
        if($session->jwtlogin($email, $password)){
            header('Location: ' . BASEURL . '/home');
        } else {
            Flasher::setFlash('Login Gagal !!', 'Username / password Anda salah', 'danger', '', '');
            header('Location: ' . BASEURL . '/');
        }
    }

    public function logout() : void
    {
        //hapus JWT di DB, Hapus Cookie dan Hapus Session
        $this->model("user")->hapusJWT();
        setcookie("PHP-MVC-PZN", "", time() - 60);
        session_destroy();
        header('Location: ' . BASEURL . '/');
    }
}