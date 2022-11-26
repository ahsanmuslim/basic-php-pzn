<?php

namespace BasicPhpPzn\PhpJwtSession\Controller;

use BasicPhpPzn\PhpJwtSession\App\Controller;
use BasicPhpPzn\PhpJwtSession\Helper\Session;

class AuthController extends Controller
{
    public function blocked()
    {
        $data['title'] = 'PHP MVC - Access Blocked';
        $data['userlogin'] = $this->model('User')->getUser();
        $this->view('Auth/blocked', $data);
    }
}