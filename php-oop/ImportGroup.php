<?php 

require_once 'data/Elektronik.php';

//cara import group beberapa class dalam 1 file dengan menggunakan blok {}
use Data\Satu\{Elektronik, Furniture, Pakaian};

$elek = new Elektronik();
$fur = new Furniture();
$pak = new Pakaian();

var_dump($elek);
var_dump($fur);
var_dump($pak);