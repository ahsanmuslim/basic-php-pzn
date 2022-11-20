<?php

require_once __DIR__.'/../vendor/autoload.php';

use BasicPhpPzn\PhpMvc\App\Router;
use BasicPhpPzn\PhpMvc\Controller\HomeController;
use BasicPhpPzn\PhpMvc\Controller\AboutController;
use BasicPhpPzn\PhpMvc\Controller\MahasiswaController;


// if(isset($_SERVER['PATH_INFO'])){
//     echo $_SERVER['PATH_INFO'];
//     echo '<br>';
//     echo $_SERVER['REQUEST_METHOD'];
//     echo '<br>';
// }

// Router::add('GET', '/products/([0-9a-zA-z]*)/categories/([0-9a-zA-z]*)', ProductController::class, 'categories');
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/mahasiswa', MahasiswaController::class, 'index');
Router::add('GET', '/mahasiswa/([0-9a-zA-z]*)', MahasiswaController::class, 'detail');
Router::add('DELETE', '/mahasiswa/([0-9a-zA-z]*)', MahasiswaController::class, 'hapus');
Router::add('GET', '/about', AboutController::class, 'index');
Router::add('GET', '/about/page', AboutController::class, 'page');



Router::run();

