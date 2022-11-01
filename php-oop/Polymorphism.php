<?php 

require_once 'data/Programmer.php';

use Programmer\{Programmer, BackEndProgrammer, FrontEndProgrammer, Company};

use function Programmer\sayHelloProgrammer;

$company = new Company();

$company->programmer = new Programmer("Ahsan");
var_dump($company);
$company->programmer = new BackEndProgrammer("Ahsan");
var_dump($company);
$company->programmer = new FrontEndProgrammer("Ahsan");
var_dump($company);

sayHelloProgrammer(new Programmer("Ahsan"));
sayHelloProgrammer(new BackEndProgrammer("Ahsan"));
sayHelloProgrammer(new FrontEndProgrammer("Ahsan"));
