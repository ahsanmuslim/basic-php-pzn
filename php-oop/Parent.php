<?php


require_once 'data/Shape.php';
use Shape\{Rectangle, Shape};

$sh = new Shape();
echo $sh->getCorner() . PHP_EOL;

$rc = new Rectangle();
echo $rc->getCorner() . PHP_EOL;
echo $rc->getParentCorner() .  PHP_EOL;