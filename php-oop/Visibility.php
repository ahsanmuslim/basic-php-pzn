<?php 

require_once 'data/Product.php';

$pro = new Product('TV LED', '2.000.000');
echo $pro->getName() . PHP_EOL;
echo $pro->getHarga() . PHP_EOL;

$hp = new Handphone('Realme C11', '1.000.000');
$hp->info();
