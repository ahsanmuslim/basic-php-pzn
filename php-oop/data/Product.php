<?php 

class Product {
    protected string $name = 'TV LED';
    protected string $harga = '4.000.000';

    public function __construct(string $name, string $harga)
    {
        $this->name = $name;
        $this->harga = $harga;
    }

    //buat methode getter unutk mengakses property dari luar class
    public function getName(){
        return $this->name;
    }

    public function getHarga(){
        return $this->harga;
    }
}

class Handphone extends Product {

    function info(){
        echo "Ini adalah produk {$this->name} dengan harga {$this->harga}"; 
    }

}
