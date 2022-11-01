<?php 

require_once 'data/Student.php';

$student1 = new Student();
$student1->id = 4;
$student1->name = "Ahsan";
$student1->kelas = "XII";
$student1->setNilai = 90;

$student2 = clone $student1;

var_dump($student1 = $student2);
var_dump($student1 == $student2);
var_dump($student2 === $student2);
