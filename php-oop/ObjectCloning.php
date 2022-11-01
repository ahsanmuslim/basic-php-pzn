<?php

require_once 'data/Student.php';

$st1 = new Student();
$st1->id = 2;
$st1->name = "Ahmad Susanto";
$st1->kelas = "XII";
$st1->setNilai(89);
var_dump($st1);

$st2 = clone $st1;
var_dump($st2);