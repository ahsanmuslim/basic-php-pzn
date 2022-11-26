<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$log = new Logger("AhsanCoding");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("Hello ahmad susanto");
$log->info("Selamat belajar composer");