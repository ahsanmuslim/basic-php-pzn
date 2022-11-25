<?php

namespace BasicPhpPzn\PhpJwtSession\Helper;

use BasicPhpPzn\PhpJwtSession\App\Controller;

class Access extends Controller
{
    public function UserAccessCheck() : bool
    {

        //ambil data controller dari PATH INFO
        $url = rtrim($_SERVER['PATH_INFO'],'/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        array_shift($url);
        $controller = $url[0];

        // Ambil data user dari Database
        $userLogin = $this->model('User')->getUser();
        $role = $userLogin['role'];
        
        //cek akses user 
        if ($this->model('Role')->countAccess($role, $controller) > 0 ) {
            return true;
        } else {
            return false;
        }

    }

    public function MenuAccessCheck($controller, $role): bool 
    {
        if($this->model('Role')->countAccess($role, $controller) > 0){
            return true;
        } else {
            return false;
        }
    }

}