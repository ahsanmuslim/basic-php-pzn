<?php

//Implementasi Attribute

namespace Ahmad\PhpVersi8\php80;

use Attribute;    
use Exception;
use ReflectionClass;
use ReflectionProperty;

#[Attribute]
class NotBlank
{

}

class LoginRequest
{
    #[NotBlank]
    public ?string $username;
    
    #[NotBlank]
    public ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();

    foreach ($properties as $property) {
        validateNotBlank($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class);
    if(count($attributes) > 0){
        if(! $property->isInitialized($object)){
            throw new Exception("Property $property->name is null");
        }
        if( $property->getValue($object) == null){
            throw new Exception("Property $property->name is null");
        }
    }
}

$request = new LoginRequest();
$request->username = "Ahmad";
$request->password = null;

var_dump(validate($request));


