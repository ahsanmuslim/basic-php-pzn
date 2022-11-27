<?php

// Implementasi First Callable Syntax

namespace Ahmad\PhpVersi8\php81;

class Person 
{

    public function __construct(public string $name)
    {
    }

    function sayHello(string $name):string{
        return "hello $name, my name is $this->name";
    }

}

$person = new Person("Susanto");

//Variable reference untuk mereferensi fungsi sayHello
$reference = $person->sayHello(...);

var_dump($reference("Ahmad"));