<?php 

$dataArray = [
    "Firstname" => "Arina",
    "Middlename" => "Sabila",
    "Lastname" => "Hanifa",
];
//di rubah dari array ke object
$dataObject = (object) $dataArray;
var_dump($dataObject);

echo "Nama depan adalah {$dataObject->Firstname}" . PHP_EOL;
echo "Nama tengah adalah {$dataObject->Middlename}" . PHP_EOL;
echo "Nama belakang adalah {$dataObject->Lastname}" . PHP_EOL;

$arrayLagi = (array) $dataObject;
var_dump($arrayLagi);