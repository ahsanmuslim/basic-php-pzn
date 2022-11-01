<?php

require_once 'data/Location.php';

use Data\Location\{Location, Province, Country, City};

$province = new Province();
$city = new City();
$country = new Country();

var_dump($province);
var_dump($city);
var_dump($country);