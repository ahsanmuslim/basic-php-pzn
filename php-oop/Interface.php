<?php

require_once 'data/Mobil.php';

use Data\Mobil\{Mobil, Avanza};

$inter = new Avanza();
$inter->drive();
echo $inter->getTire();

$inter->getBrand();
echo $inter->isMaintenance();