<?php
namespace Ahmad\PhpVersi8\php80;

use Exception;

//Implementasi Throw Expression
class ThrowExpression
{
    function Selamat(?string $name)
    {
        if($name == null){
            throw new Exception("Tidak boleh null");
        }

        return "Hello $name";
    }

    //Throw expression akan kita pakai di Ternary Operator
    //Bisa masuk di Expression bukan hanya statement
    function Hello(?string $name)
    {
        $result = $name != null ? "Heloo $name" : throw new Exception("Invalid Name");
        return $result;
    }

}

$th = new ThrowExpression();

var_dump($th->Selamat("AHmad"));
var_dump($th->Hello("SUsanto"));
var_dump($th->Hello(null));
