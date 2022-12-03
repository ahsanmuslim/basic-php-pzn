<?php

use BasicPhpPzn\PhpJwtSession\App\Router;
use BasicPhpPzn\PhpJwtSession\Controller\AuthController;
use BasicPhpPzn\PhpJwtSession\Controller\HomeController;
use BasicPhpPzn\PhpJwtSession\Middleware\AuthMiddleware;
use BasicPhpPzn\PhpJwtSession\Controller\AboutController;
use BasicPhpPzn\PhpJwtSession\Controller\LoginController;
use BasicPhpPzn\PhpJwtSession\Controller\ProfileController;
use BasicPhpPzn\PhpJwtSession\Controller\MahasiswaController;

//Router untuk Home
Router::add('GET', '/', LoginController::class, 'index');
Router::add('GET', '/home', HomeController::class, 'index', [AuthMiddleware::class]);

//Route untuk Mahasiswa
Router::add('GET', '/mahasiswa', MahasiswaController::class, 'index', [AuthMiddleware::class]);
Router::add('POST', '/mahasiswa', MahasiswaController::class, 'tambah', [AuthMiddleware::class]);
Router::add('GET', '/mahasiswa/([0-9a-zA-z]*)', MahasiswaController::class, 'detail', [AuthMiddleware::class]);
Router::add('POST', '/mahasiswa/getEdit', MahasiswaController::class, 'getEdit', [AuthMiddleware::class]);
Router::add('POST', '/mahasiswa/cari', MahasiswaController::class, 'cari', [AuthMiddleware::class]);
Router::add('PUT', '/mahasiswa', MahasiswaController::class, 'update', [AuthMiddleware::class]);
Router::add('DELETE', '/mahasiswa', MahasiswaController::class, 'hapus', [AuthMiddleware::class]);

//Route untuk About
Router::add('GET', '/about', AboutController::class, 'index', [AuthMiddleware::class]);

//Route untuk Profile
Router::add('GET', '/profile', ProfileController::class, 'index', [AuthMiddleware::class]);
Router::add('GET', '/profile/macaddress', ProfileController::class, 'macaddress', [AuthMiddleware::class]);
Router::add('GET', '/profile/edit', ProfileController::class, 'edit', [AuthMiddleware::class]);
Router::add('PUT', '/profile', ProfileController::class, 'update', [AuthMiddleware::class]);

//Route untuk proses login
Router::add('POST', '/login', LoginController::class, 'login');
Router::add('GET', '/logout', LoginController::class, 'logout');
Router::add('GET', '/blocked', AuthController::class, 'blocked');

