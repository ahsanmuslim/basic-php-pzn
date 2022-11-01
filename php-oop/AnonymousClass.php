<?php 

interface HelloWorld {
    public function sayHello():void;
}

$hello = new class("Ahsan") implements HelloWorld {

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;    
    }

    public function sayHello(): void
    {
        echo "Hi $this->name, wellcome to programming web !!" . PHP_EOL;
    }

};

$hello->sayHello();