<?php

require_once 'data/Person.php';

$person = new Person();
$person->name = "Ahsan";
$person->address = "Bayat";
$person->country = "Indonesia";

$person->sayHello("Susanto");
$person->thisHello(null);
$person->thisHello("Susanto");
