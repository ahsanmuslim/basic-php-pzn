<?php

//Implementasi Null Safe Operator
namespace Ahmad\PhpVersi8\php80;

class Address
{
    public ?string $country;
}

class User 
{   
    public ?Address $address;
}

function getCountry(?User $user): ?string
{
    return $user->address->country;
}

// var_dump(getCountry(null));
$address = new Address();
$address->country = "India";

$user = new User();
$user->address = $address;

$user->address->country = "Indonesia";

var_dump($address);
var_dump($user);