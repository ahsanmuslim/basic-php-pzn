<?php

require_once 'data/Kendaraan.php';
require_once 'data/KendaraanShowroom.php';

$motorShowroom = new ShowroomMotor();
$motor = $motorShowroom->buy("Ahsan");

$mobilShowroom = new ShowroomMobil();
$mobil = $mobilShowroom->buy("Ahmad");

