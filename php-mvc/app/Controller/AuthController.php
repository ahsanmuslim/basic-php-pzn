<?php

namespace BasicPhpPzn\PhpMvc\Controller;

use BasicPhpPzn\PhpMvc\App\Controller;

class AuthController extends Controller
{
    public function blocked()
    {
        $data['title'] = 'PHP MVC - Access Blocked';
        $data['userlogin'] = $this->userlogin = $this->model('User')->getUser();
        $this->view('Auth/blocked', $data);
    }
}