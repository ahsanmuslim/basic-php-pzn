<?php 

require_once 'data/LoginRequest.php';
require_once 'exception/ValidationException.php';
require_once 'helper/Validation.php';

$loginRequest = new LoginRequest();
$loginRequest->username = "Ahsan";
$loginRequest->password = "   ";

try {
    validationLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    //untuk mencari baris error pada script PHP
    var_dump($exception->getTrace());
} finally {
    echo "Error atau tidak akan dieksekusi" . PHP_EOL;
}

