<?php

//Implementasi Match Expression
namespace Ahmad\PhpVersi8\php80;

$value = "X";

$result = "";

switch($value){
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda Tidak Lulus";
        break;
    case "E":
        $result = "Anda Salah Jurusan";
        break;
    default:
        $result = "Unknown";
}

var_dump($result);

$result = match($value){
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Anda Salah Jurusan",
    default => "Unknown"
};

var_dump($result);

//non Equals Match Expression
$value = 85;

$result = match(true){
    $value <= 50 => "E",
    $value <= 60 => "D",
    $value <= 70 => "C",
    $value <= 80 => "B",
    default => "A"
};

var_dump($result);

//String Check 
$value = "Mr";

$result = match(true){
    str_contains($value, "Mr") => "Hello Mr.",
    str_contains($value, "Mrs") => "Hello Mrs.",
    default => "Hello"
};

var_dump($result);