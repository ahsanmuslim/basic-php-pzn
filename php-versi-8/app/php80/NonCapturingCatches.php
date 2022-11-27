<?php
namespace Ahmad\PhpVersi8\php80;

use Exception;

//IMplemetasi Non-Capturing CAtches
//TIdak perlu membuat variable Exception
function validate(string $value)
{
    if(trim($value) == ""){
        throw new Exception("Invalid name");
    }
}

try {
    validate("  ");

//TIdak error ketika tidak membuat variable Exception $e
} catch (Exception) {
    echo "Invalid Name";
}