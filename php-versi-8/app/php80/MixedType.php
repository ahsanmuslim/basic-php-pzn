<?php
namespace Ahmad\PhpVersi8\php80;

//Implementasi Mixed Type V2
//Karena sekarang di PHP 8 sudah ada Union Type maka Mixed Type V di Versi 8 adalah singkatan Union Type
//Mixed = array|bool|string|int|float|null|object|callable|resource
class Exp
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    
}

function test(mixed $data): mixed
{
    if(is_array($data)){
        return [];
    } elseif(is_bool($data)){
        return true;
    } elseif (is_string($data)){
        return "String";
    } elseif(is_int($data)){
        return 1;
    } elseif(is_null($data)){
        return null;
    } elseif(is_object($data)){
        return new Exp("Ahsan");
    } elseif(is_float($data)){
        return(2.5);
    }
}

var_dump(test("String"));
var_dump(test(["Ahmad", "susanto"]));
var_dump(test(1));
var_dump(test(2.5));
var_dump(test(true));
var_dump(test(null));
var_dump(test(new Exp("Ahsan")));
