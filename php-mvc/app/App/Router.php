<?php

namespace BasicPhpPzn\PhpMvc\App;

class Router 
{
    private static array $routes = [];

    public static function add(string $method, 
                                string $path,  
                                string $controller, 
                                string $function,
                                array $middleware = []): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middlewares' => $middleware
        ];
    }

    public static function run(): void
    {
        $path = '/';
        if(isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        //cek request method POST apakah DELETE atau PUT
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            if(isset($_POST['_method'])){
                $method = $_POST['_method'];
            }
        }

        //list Route
        // var_dump(self::$routes);

        //data list route di looping untuk memilih path & method yang cocok
        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";

            if(preg_match($pattern, $path, $variable) && $method == $route['method']){

                //panggil class Middleware
                foreach ($route['middlewares'] as $middleware) {
                    $objmiddleware = new $middleware;
                    $objmiddleware->index();
                }

                $function = $route['function'];
                $controller = new $route['controller'];
                // var_dump($controller);
                //$controller->$function();

                array_shift($variable);
                call_user_func_array([$controller, $function], $variable);
                
                return;
            }
        }
        
        $className = 'BasicPhpPzn\PhpMvc\Controller\HomeController';
        $controller = new $className;
        $function = 'notfound';
        call_user_func_array([$controller, $function], $variable);

    }
}