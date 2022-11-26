<?php

use PhpDasar\RandomNumber\Random;
use BasicPhpPzn\PhpComposer\People;

require_once __DIR__ . '/vendor/autoload.php';


echo "Hello world";
echo '<br>';
$people = new People("Ahmad Susanto");
echo $people->sayHello("Ahsan");
echo '<br>';

//coba library yang sudah dibuat
$number = new Random();
echo $number->getNumber();
echo '<br>';
echo $number->getString();