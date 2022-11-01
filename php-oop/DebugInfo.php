<?php

require_once 'data/Student.php';

$student1 = new Student();
$student1->id = 4;
$student1->name = "Ahsan";
$student1->kelas = "XII";
$student1->setNilai = 90;

var_dump($student1);