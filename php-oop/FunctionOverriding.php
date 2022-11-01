<?php 

require_once 'data/Manager.php';

$man = new Manager('Susanto', 'Mr');
echo $man->sayHello('Budi');

$sup = new Supervisor('Susanto');
echo $sup->sayHello('Budi');
