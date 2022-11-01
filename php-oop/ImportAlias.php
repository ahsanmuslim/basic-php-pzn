<?php

require_once 'data/Elektronik.php';
require_once 'data/Helper.php';

use Data\Satu\Elektronik as Elk1;
use Data\Dua\Elektronik as Elk2;
use function Helper\sayHello as Hello;
use const Helper\APP_TYPE as App;

//mengakses constant & fungsi pada namespace Helper, menggunakan metode import alias dg kata kunci Use - As
$elek1 = new Elk1();
$elek2 = new Elk2();

var_dump($elek1);
var_dump($elek2);

Hello();
echo App . PHP_EOL;