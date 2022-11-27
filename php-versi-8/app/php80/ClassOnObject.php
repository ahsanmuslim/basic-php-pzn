<?php
namespace Ahmad\PhpVersi8\php80;

// Implementasi Class On Object 
class Login 
{

}

$login = new Login();
var_dump($login::class); //PHP 8
var_dump(get_class($login));
var_dump(Login::class);