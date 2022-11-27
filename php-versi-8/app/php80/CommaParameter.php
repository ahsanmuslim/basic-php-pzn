<?php
namespace Ahmad\PhpVersi8\php80;

//Implementasi Comma Parameter
//Tidak akan error jika pada parameter terakhir ada karakter COMMA
function salam(string $name, string $address): string
{
    return "hello nama saya $name, saya tinggal di $address";
}

function sum(int... $values)
{
    $result = 0;
    foreach ($values as $value) {
        $result += $value;
    }
    return $result;
}

var_dump(salam(
    "Ahmad", 
    "Tangerang",
));

var_dump(sum(
    2,
    2,
    2,
    2,
    2,
    2,
    2,
    2,
    3,
    3,
    3,
    3,
    3,
    3,
));

$nama = [
    "depan" => "Ahmad",
    "tengah" => "Susanto",
    "belakang" => "Jayanegara",
];

var_dump($nama);