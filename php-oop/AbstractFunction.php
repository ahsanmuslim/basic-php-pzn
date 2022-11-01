<?php 

require_once 'data/Kendaraan.php';

use Data\Kendaraan\{Kendaraan, Mobil, Motor};

$mbl = new Mobil();
$mbl->name = "Innova";
$mbl->ride();

$mtr = new Motor();
$mtr->name = "Jupiter Z";
$mtr->ride();
