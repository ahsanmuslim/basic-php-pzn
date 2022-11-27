<?php

//implementasi Intersection Union Type

namespace Ahmad\PhpVersi8\php81;

interface HasName
{
    function getName(): string;
}

interface HasBrand
{
    function getBrand(): string;
}

class Car implements HasName, HasBrand
{
    private $brand;
    private $name;

    public function __construct(string $brand, string $name)
    {
        $this->brand = $brand;
        $this->name = $name;
    }

    public function getBrand():string
    {
        return $this->brand;
    }

    public function getName(): string
    {
        return $this->name;
    }
    

    
}

function printBrandAndName(HasName & HasBrand $value)
{
    echo $value->getBrand() . "-" . $value->getName(); 
}

printBrandAndName(new Car("Toyota", "Avanza"));