<?php

use BasicPhpPzn\PhpMvc\App\Router;

//mencetak session ketika user mengkakses file index, bertujuan untuk menyimpan session flash yang digunakan untuk mencetak pesan Flash
if ( !session_id()){
    session_start();
}

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';

Router::run();

