<?php

namespace BasicPhpPzn\PhpMvc\App;

class Router 
{
    private static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run(): void
    {
        $path = '/';
        if(isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        //cek request method POST apakah DELETE atau PUT
        if($method == 'POST'){
            if(isset($_POST['_method'])){
                $method = $_POST['_method'];
            }
        }

        var_dump($method);

        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if(preg_match($pattern, $path, $variable) && $method == $route['method']){

                $function = $route['function'];
                $controller = new $route['controller'];
                //$controller->$function();

                array_shift($variable);
                call_user_func_array([$controller, $function], $variable);

                return;
            }
        }

        http_response_code(404);
        echo "Controller Not Found";
    }
}