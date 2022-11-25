<?php

use BasicPhpPzn\PhpJwtSession\App\Router;
use BasicPhpPzn\PhpJwtSession\Controller\AuthController;
use BasicPhpPzn\PhpJwtSession\Controller\HomeController;
use BasicPhpPzn\PhpJwtSession\Middleware\AuthMiddleware;
use BasicPhpPzn\PhpJwtSession\Controller\AboutController;
use BasicPhpPzn\PhpJwtSession\Controller\LoginController;
use BasicPhpPzn\PhpJwtSession\Controller\MahasiswaController;

echo 'Hello';
//Router untuk Home
Router::add('GET', '/', LoginController::class, 'index');
Router::add('GET', '/home', HomeController::class, 'index', [AuthMiddleware::class]);

//Route untuk Mahasiswa
Router::add('GET', '/mahasiswa', MahasiswaController::class, 'index', [AuthMiddleware::class]);
Router::add('POST', '/mahasiswa', MahasiswaController::class, 'tambah');
Router::add('GET', '/mahasiswa/([0-9a-zA-z]*)', MahasiswaController::class, 'detail');
Router::add('POST', '/mahasiswa/getEdit', MahasiswaController::class, 'getEdit');
Router::add('POST', '/mahasiswa/cari', MahasiswaController::class, 'cari');
Router::add('PUT', '/mahasiswa', MahasiswaController::class, 'update');
Router::add('DELETE', '/mahasiswa', MahasiswaController::class, 'hapus');

//Route untuk About
Router::add('GET', '/about', AboutController::class, 'index', [AuthMiddleware::class]);

//Route untuk proses login
Router::add('POST', '/login', LoginController::class, 'login');
Router::add('GET', '/logout', LoginController::class, 'logout');
Router::add('GET', '/blocked', AuthController::class, 'blocked');

