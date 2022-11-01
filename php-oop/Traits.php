<?php 

require_once 'data/SayGoodBye.php';

use Data\Traits\People;

$people = new People();
$people->goodBye("Ahsan");
$people->hello("Ahsan");

$people->name = "Susanto";
var_dump($people);