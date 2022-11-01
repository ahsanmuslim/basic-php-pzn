<?php

class Data implements IteratorAggregate {

    var string $first = "Pertama";
    public string $second = "Kedua";
    protected string $third = "Ketiga";
    private string $fourth = "Keempat";

    //cara 1 dengan cara manual 
    // public function getIterator():Traversable
    // {
    //     $array = [
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "fourth" => $this->fourth,
    //     ];

    //     return new ArrayIterator($array);
    // }

    //cara 2 dengan generator atau keyword yield
    public function getIterator():Traversable
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }

    
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL; 
}