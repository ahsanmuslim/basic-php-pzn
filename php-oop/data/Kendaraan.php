<?php 

namespace Data\Kendaraan;

abstract class Kendaraan {
    public string $name;

    abstract public function ride(): void;
}

class Mobil extends Kendaraan {
    public function ride():void {
        echo "$this->name is riding" . PHP_EOL;
    }
}

class Motor extends Kendaraan {
    public function ride():void {
        echo "$this->name is riding" . PHP_EOL;
    }
}