<?php 

trait Example_A {
    function doA():void
    {
        echo 'A' . PHP_EOL;
    }

    function doB():void
    {
        echo 'B' . PHP_EOL;
    }
}

trait Example_B {
    function doA():void
    {
        echo 'trait A' . PHP_EOL;
    }

    function doB():void
    {
        echo 'trait B' . PHP_EOL;
    }
}

class sample {
    use Example_A, Example_B {
        Example_A::doA insteadOf Example_B;
        Example_B::doB insteadOf Example_A;
    }
}

$sample = new sample();
$sample->doA();
$sample->doB();