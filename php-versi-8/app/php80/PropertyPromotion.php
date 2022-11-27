<?php

namespace Ahmad\PhpVersi8\php80;

//metode lama dalam pembuatan Constructor Property
class Product 
{
    public string $id;
    public string $name;
    public int $price;
    public int $quantity;

    public function __construct($id, $name, $price, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

class Barang
{
    public function __construct(public string $id,
                                public string $name,
                                public int $harga,
                                public int $jumlah,
                                protected bool $expensive = true)
    {

    }
}

$product = new Product(id:"1", name:"Kursi", price:3000, quantity:3);
var_dump($product);

$brg = new Barang(id:"1", name:"Meja", harga:2000, jumlah:3);
var_dump($brg);