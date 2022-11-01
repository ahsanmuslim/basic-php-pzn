<?php

class Car {
    var string $name;
    var string $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    function infoCar (): void {
        echo "This car is {$this->name} and type is {$this->type}" . PHP_EOL;
    }
}

class Avanza extends Car {

}

class Innova extends Car {

}