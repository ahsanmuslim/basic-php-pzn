<?php

// IMplementasi Enum PHP 8.1

namespace Ahmad\PhpVersi8\Php81;

use Exception;

trait IndonesiaGender 
{
    function inIndonesia(): string
    {
        return match($this) {
            Gender::Male => "Tuan",
            Gender::Female => "Nyonya"
        };
    }
}

interface hello
{
    function hello(): string;
}

enum Gender: string implements hello
{
    use IndonesiaGender;

    case Male = "Mr";
    case Female = "Mrs";

    const Unknown = "Unknown";

    static function fromJawa(string $value): Gender
    {
        return match($value) {
            "Mase" => Gender::Male,
            "Mbakyu" => Gender::Female,
            default => throw new Exception("Tidak ada yang cocok")
        };
    }

    function hello(): string
    {
        return "Selamat pagi " . $this->value;
    }

}

class Customer 
{
    public function __construct(public string $id,
                                public string $name,
                                public ?Gender $gender)
    {
    }
}

function sayHello(Customer $customer): string
{
    if($customer->gender == Gender::Male){
        return "Hello Mr. $customer->name";
    } elseif ($customer->gender == Gender::Female){
        return "Hello Mrs. $customer->name";
    } else {
        return "Hello Miss. $customer->name";
    }
}

function greeting(Customer $customer):string
{
    if($customer->gender == null){
        return "heloo $$customer->name";
    } else {
        return "Hello " . $customer->gender->value . "." . $customer->name;
    }
}

var_dump(sayHello(new Customer("1", "Ahmad Susanto", Gender::Male)));
var_dump(sayHello(new Customer("2", "Kiki Lestari", Gender::Female)));

var_dump(greeting(new Customer("2", "Kiki Lestari", Gender::from("Mrs"))));
var_dump(greeting(new Customer("2", "Ahsan", Gender::from("Mr"))));
var_dump(greeting(new Customer("2", "Maria", Gender::tryFrom("Salah"))));

//mengambil semua Case Enum
var_dump(Gender::cases());

var_dump(Gender::Male->hello());
var_dump(Gender::Female->hello());
var_dump(Gender::Male->inIndonesia());
var_dump(Gender::Female->inIndonesia());

var_dump(Gender::fromJawa("Mase"));
var_dump(Gender::fromJawa("Mbakyu"));

var_dump(Gender::Unknown);
// var_dump(Gender::fromJawa("Salah"));