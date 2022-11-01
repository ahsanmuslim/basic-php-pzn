<?php 

namespace Data\Mobil;

interface HasBrand {
    function getBrand():void;
}

interface isMaintenance {
    function isMaintenance():bool;
}

interface Mobil extends HasBrand, isMaintenance
{
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Mobil 
{
    public function drive(): void
    {
        echo "Drive Avanza " . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): void
    {
        echo "Merek Toyota" . PHP_EOL;
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}