<?php

class Zero 
{

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    static public function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }

}

$zero = new Zero();

$zero->callFunction("Magis", "fungsi");
Zero::sayHello("Magic", "OK");