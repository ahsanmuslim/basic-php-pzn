<?php

use BasicPhpPzn\PhpJwtSession\App\Router;
use Dotenv\Dotenv;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';

//deklarasi format tanggal Asia
date_default_timezone_set('Asia/Jakarta');

//mencetak session ketika user mengkakses file index, bertujuan untuk menyimpan session flash yang digunakan untuk mencetak pesan Flash
if (!session_id()){
    session_start();
}

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$url = $_ENV['APP_URL'];
define('BASEURL',"$url");

Router::run();

