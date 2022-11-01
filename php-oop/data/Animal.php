<?php 

class Animal {
    var $jenis;
    var $habitat;
    var $makanan = "Daging";

    public function __construct(string $jenis, string $habitat)
    {
        $this->jenis = $jenis;
        $this->habitat = $habitat;
    }

    public function __destruct()
    {
        echo "Object animal {$this->jenis} is destroyed" . PHP_EOL;
    }

}