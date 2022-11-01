<?php 

function getGenap(int $max):Iterator {
    $array = [];
    for ($i=1; $i <= $max ; $i++) { 
        if($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach (getGenap(100) as $arr) {
    echo "Genap = $arr" . PHP_EOL;
}

function getGanjil(int $max):Iterator {
    for ($i=1; $i <= $max ; $i++) { 
        if($i % 2 == 1) {
            @yield $i;
        }
    }
}

foreach (getGanjil(100) as $arr) {
    echo "Ganjil = $arr" . PHP_EOL;
}