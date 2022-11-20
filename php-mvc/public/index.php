<?php

require_once __DIR__.'/../vendor/autoload.php';

use BasicPhpPzn\PhpMvc\App\Router;
use BasicPhpPzn\PhpMvc\Controller\HomeController;
use BasicPhpPzn\PhpMvc\Controller\AboutController;
use BasicPhpPzn\PhpMvc\Controller\MahasiswaController;

//mencetak session ketika user mengkakses file index, bertujuan untuk menyimpan session flash yang digunakan untuk mencetak pesan Flash
if ( !session_id()){
    session_start();
}


// if(isset($_SERVER['PATH_INFO'])){
//     echo $_SERVER['PATH_INFO'];
//     echo '<br>';
//     echo $_SERVER['REQUEST_METHOD'];
//     echo '<br>';
// }

// Router::add('GET', '/products/([0-9a-zA-z]*)/categories/([0-9a-zA-z]*)', ProductController::class, 'categories');
Router::add('GET', '/', HomeController::class, 'index');

//Route untuk Mahasiswa
Router::add('GET', '/mahasiswa', MahasiswaController::class, 'index');
Router::add('POST', '/mahasiswa', MahasiswaController::class, 'tambah');
Router::add('GET', '/mahasiswa/([0-9a-zA-z]*)', MahasiswaController::class, 'detail');
Router::add('GET', '/mahasiswa/([0-9a-zA-z]*)', MahasiswaController::class, 'edit');
Router::add('POST', '/mahasiswa/getEdit', MahasiswaController::class, 'getEdit');
Router::add('POST', '/mahasiswa/cari', MahasiswaController::class, 'cari');
Router::add('PUT', '/mahasiswa', MahasiswaController::class, 'update');
Router::add('DELETE', '/mahasiswa/([0-9a-zA-z]*)', MahasiswaController::class, 'hapus');

//Route untuk About
Router::add('GET', '/about', AboutController::class, 'index');
Router::add('GET', '/about/page', AboutController::class, 'page');



Router::run();

