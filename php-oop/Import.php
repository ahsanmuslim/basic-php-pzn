<?php

require_once 'data/Elektronik.php';
require_once 'data/Helper.php';

use Data\Satu\Elektronik;
use function Helper\sayHello;
use const Helper\APP_TYPE;

//mengakses constant & fungsi pada namespace Helper, menggunakan metode import dg kata kunci Use 
echo APP_TYPE . PHP_EOL;
sayHello();

$elektronik1 = new Elektronik();
var_dump($elektronik1);