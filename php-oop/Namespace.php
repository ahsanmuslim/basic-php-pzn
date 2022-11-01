<?php

require_once 'data/Elektronik.php';
require_once 'data/Helper.php';

$elektronik1 = new Data\Satu\Elektronik();
$elektronik2 = new Data\Dua\Elektronik();

var_dump($elektronik1);
var_dump($elektronik2);

//mengakses constant & fungsi pada namespace Helper, harus menuliskan namespace sebelum nama fungsi atau constant
echo Helper\APP_TYPE . PHP_EOL;
Helper\sayHello();