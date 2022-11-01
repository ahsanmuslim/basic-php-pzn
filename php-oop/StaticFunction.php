<?php 

require_once 'helper/MathHelper.php';

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Kiki ELbe";
echo MathHelper::$name . PHP_EOL;

echo MathHelper::sum(10,20,50,14,20,21,90) . PHP_EOL;