<?php

namespace BasicPhpPzn\PhpJwtSession\Helper;

use Firebase\JWT\JWT;
use BasicPhpPzn\PhpJwtSession\App\Controller;
use Exception;

class Session extends Controller
{
    private static string $SECRET_KEY = "jadnsgjkhasdjghsdksagkdsjgkgjdfhguoiewhjtirojijfaiodjfgidsj";

    public function jwtlogin(string $email, string $password): bool
    {
        if($this->model('User')->cekUser($email, $password) > 0){

            //setting payload JWT
            $payload = [
                "email" => $email,
                "role" => "admin"
            ];

            //generate JWT dan simpan JWT di Cookie
            $jwt = JWT::encode($payload, self::$SECRET_KEY, 'HS256');
            setcookie("PHP-MVC-PZN", $jwt);

            return true;
        } else {
            return false;
        }
    }

    public function getCurrentSession(): Session
    {
        if($_COOKIE['PHP-MVC-PZN']){
            $jwt = $_COOKIE['PHP-MVC-PZN'];

            //decode cookie yang berisi kode jwt yang dikirimkan browser untuk divalidasi apakah valid
            try {         
                $payload = JWT::decode($jwt, Session::$SECRET_KEY, ['HS256']);
                return new Session(email: $payload['email'], role: $payload['role']);        
            } catch (\Throwable $th) {   
                $th->getMessage();
            }
            
        } else {
            throw new Exception("User belum login");
        }
    }
}