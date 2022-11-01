<?php 

class Manager {
    var $name = "Ahsan";
    var $title ;

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello (string $name) {
        echo "Hello $name, my name is Manager {$this->name}". PHP_EOL;
    }

}

class Supervisor extends Manager {

    public function __construct(string $name)
    {
        parent::__construct($name, "Supervisor");
    }

    function sayHello (string $name) {
        echo "Hello $name, my name is Supervisor {$this->name}". PHP_EOL;
    }

}