<?php

//Implementasi PHP New in Initializer
//dapat membuat parameter New pada type parameter Object pada sebuah function

namespace Ahmad\PhpVersi8\php81;

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Customer.php';

use Ahmad\PhpVersi8\php81\Category;
use Ahmad\PhpVersi8\Php81\Customer;

class Product 
{
    public function __construct(public string $name = "Ahsan",
                                public Category $category = new Category("1", "Elektronik"))
    {        
    }
}

function salam(Customer $cust =  new Customer("0", "no name", Gender::Male)){

}


var_dump(new Product());
var_dump(new Product("Nokia"));
var_dump(new Product("Samsung", new Category("11", "handphone")));

salam();