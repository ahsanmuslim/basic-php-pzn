<?php

namespace BasicPhpPzn\PhpComposer;

class People 
{
    public function __construct (private string $name)
    {
        
    }

    public function sayHello(string $name):string
    {
        return "Hello $name, Selamat datang di pemrograman PHP. Nama saya $this->name";
    }
}