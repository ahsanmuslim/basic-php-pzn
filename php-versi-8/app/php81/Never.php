<?php

//Implementasi Never Return Type

namespace Ahmad\PhpVersi8\php81;

function stop(): never 
{
    echo "STOP" . PHP_EOL;
    //jik return type never harus menggunakan exit()
    exit(); 
}

stop();

echo "Ini Never Return Type";