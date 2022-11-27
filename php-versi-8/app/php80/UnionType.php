<?php

//Implementasi Union Type Property 
//DImana kita bisa menentukan tipe data property lebih dari 1 Type data
//Di tandai dengan tanda | untuk setiap Type PRoperty
//Bisa juga digunakan untuk Return Value dari Function

namespace Ahmad\PhpVersi8\php80;

class Example 
{
    public int|string|bool|array $data;
}

$exp = new Example();
$exp->data = "Ahmad";
$exp->data = 2;
$exp->data = true;
$exp->data = ["Meja", "kursi"];

var_dump($exp);


function sample(string|array $data): string|array
{
    if(is_array($data)){
        return  ["Array"];
    } else if (is_string($data)){
        return "String";
    }
}

$param = "Ahmad";
$param = ["Ahmad", "Susanto"];
var_dump(sample($param));