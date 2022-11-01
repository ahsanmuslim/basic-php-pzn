<?php

require_once 'data/Kendaraan.php';

use Data\Kendaraan\{Kendaraan, Mobil, Motor};

interface KendaraanShowroom {
    function buy(string $name):Kendaraan;
}

class ShowroomMotor implements KendaraanShowroom 
{
    public function buy(string $name):Motor 
    {
        $motor = new Motor();
        $motor->name = "Karisma";
        return $motor;
    }
}

class ShowroomMobil implements KendaraanShowroom 
{
    public function buy(string $name):Mobil 
    {
        $mobil = new Mobil();
        $mobil->name = "Brio";
        return $mobil;
    }
}