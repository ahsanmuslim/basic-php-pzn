<?php 

namespace Helper;

class MathHelper {
    static public string $name = "Ahmad Susanto";

    static public function sum(int... $number){
        $total = 0;
        foreach ($number as $num) {
            $total += $num;
        }

        return $total;
    }
}