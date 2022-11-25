<?php

use BasicPhpPzn\PhpMvc\App\Router;
use BasicPhpPzn\PhpMvc\Controller\AuthController;
use BasicPhpPzn\PhpMvc\Controller\HomeController;
use BasicPhpPzn\PhpMvc\Middleware\AuthMiddleware;
use BasicPhpPzn\PhpMvc\Controller\AboutController;
use BasicPhpPzn\PhpMvc\Controller\LoginController;
use BasicPhpPzn\PhpMvc\Controller\MahasiswaController;

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

