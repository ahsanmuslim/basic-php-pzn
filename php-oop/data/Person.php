<?php

class Person {
    var $name;
    var $address;
    var $country;

    const AUTHOR = "AHMAD SUSANTO";

    function sayHello (string $name) {
        echo "Hello $name". PHP_EOL;
    }

    function thisHello (?string $name) {
        if(is_null($name)){
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hi $name, my name is {$this->name}" . PHP_EOL;
        }
    }

}