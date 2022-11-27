<?php
namespace Ahmad\PhpVersi8\php80;

use Stringable;

//IMplementasi Stringable Interface
function sayHello(Stringable $stringable):void
{
    echo "Hello {$stringable->__toString()}";
}

class Person
{
    public function __toString()
    {
        return "Person";
    }
}

sayHello(new Person);