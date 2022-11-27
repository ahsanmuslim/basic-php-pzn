<?php
namespace Ahmad\PhpVersi8\php80;

// Implementasi Validation Function Overriding

//1. Implementasi pada Trait
trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class sampleClass
{
    use SampleTrait;

    //tidak sama dengan Trait parameter Type nya 
    // public function sampleFunction(int $name): string
    public function sampleFunction(string $name): string
    {
        return "Hello $name";
    }
}

//Akan error karena tipe parameter di Trait dan di Class Beda string vs int
var_dump(new sampleClass());

// 2. Implementasi pada Class 
class ParentClass 
{
    public function method(string $name): string
    {
        return $name;
    }
}

class ChildClass extends ParentClass
{
    //Error karena type parameter beda dengan parent class
    // public function method(int $name): string
    public function method(string $name): string
    {
        return $name;
    }
}

$child = new ChildClass();
var_dump($child->method(2));

// 3. Implementasi pada private Overriding Function 
//Tidak error seperti yang ada di PHP 7, karena modifier function test adalah private
class Manager 
{
    private function test():void
    {}
}

class Director extends Manager
{
    public function test(string $name): string
    {
        return $name;
    }
}

$dir = new Director();
var_dump($dir->test("Hello AHmad"));