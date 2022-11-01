<?php
require_once "data/Person.php";

define("APP_VERSION", "APP-1.0001");

const APP_VERSI = "APP 2.0";

echo "Ini adalah aplikasi versi " . APP_VERSION . PHP_EOL;
echo "Ini adalah aplikasi versi " . APP_VERSI . PHP_EOL;

//mengakses constant dari class Person 
echo "Author aplikasi " . Person::AUTHOR . PHP_EOL;

//mengakses constant dari dalam class dengan kata kunci self 
class Books {
    const PENGARANG = "Andrea Hirata";

    function infoBuku (){
        echo "Pengarang buku Laskar Pelangi adalah " . self::PENGARANG . PHP_EOL;
    }
    
}

$buku = new Books();
$buku->infoBuku();