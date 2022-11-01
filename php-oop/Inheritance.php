<?php

require_once 'data/Car.php';

$car = new Car('Almaz', 'Manual');
$avanza = new Avanza('Avanza', 'Metic');
$innova = new Innova('Innova', 'Metic');

$car->infoCar();
$avanza->infoCar();
$innova->infoCar();