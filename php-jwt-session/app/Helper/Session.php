<?php

namespace BasicPhpPzn\PhpJwtSession\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Ramsey\Uuid\Uuid;

use BasicPhpPzn\PhpJwtSession\App\Controller;
use BasicPhpPzn\PhpJwtSession\App\Database;

class Session extends Controller
{
    private static string $SECRET_KEY = "jadnsgjkhasdjghsdksaewrmvjdfliyopporuqbh";

    public function jwtlogin(string $email, string $password): bool
    {
        $data = $this->model('User')->cekUserLogin($email, $password);
        if(! empty($data)){
            //Set email session
            $_SESSION['email'] = $email;

            //setting payload JWT
            $payload = [
                "email" => $data['email'],
                "role" => $data['role'],
                "id_login" => Uuid::uuid1()->toString()
            ];

            //generate JWT, set cookie option dan simpan JWT di Cookie
            $jwt = JWT::encode($payload, self::$SECRET_KEY, 'HS256');
            $option = [
                "expires" => time()+3600, // cookie expire 1 jam
                "httponly" => true,
                "secure" => false,
                "path" => "",
                "domain" => ""
            ];
            setcookie("PHP-MVC-PZN", $jwt, $option);

            //simpan JWT di DB User
            $this->model('User')->simpanJWT($jwt, $email);

            return true;
        } else {
            return false;
        }
    }

    public static function getCurrentSession(): bool
    {

        if(isset($_COOKIE['PHP-MVC-PZN']) && isset($_SESSION['email']) ){
            $controller = new Controller();

            $userlogin = $controller->model("User")->getUser();
            $jwt = $_COOKIE['PHP-MVC-PZN'];

            //cek apakah JWT user login pada Cookie sama dengan JWT active user yang tersimpan di DB
            if(isset($userlogin['jwt'])){
                if($jwt == $userlogin['jwt']){
                    return true;
                }
            } else {
                return false;
            }

        } else {
            return false;
        }
    }
}