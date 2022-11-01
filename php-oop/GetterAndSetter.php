<?php

use Data\Category\Category;

require_once 'data/Category.php';

$cat = new Category;
$cat->setName('Kendaraan');
$cat->setExpensive(true);
$cat->setName('    ');

echo "Category {$cat->getName()}" . PHP_EOL;
echo "Category {$cat->isExpensive()}" . PHP_EOL;