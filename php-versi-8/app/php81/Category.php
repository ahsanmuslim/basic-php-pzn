<?php

// Implementasi Readonly Properties

namespace Ahmad\PhpVersi8\php81;

class Category
{
    public readonly string $id;
    public readonly string $name;

    public function setId(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$category = new Category();
$category->setId("1", "Ahmad Susanto");

var_dump($category->id);
var_dump($category->name);

//error readonly tidak dapat di re assign
// $category->id = "2"; 

//metode promoted constructor
class Kategori 
{
    public function __construct(public readonly string $id,
                                public readonly string $name)
    {
    }
}

$kat = new Kategori("2", "Ahsan");
var_dump($kat);

// $kat->id = "3";