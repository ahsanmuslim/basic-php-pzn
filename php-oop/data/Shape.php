<?php 

namespace Shape;

class Shape {

    public function getCorner(){
        return 0;
    }

}

class Rectangle extends Shape {

    public function getCorner() {
        return 4;
    }

    public function getParentCorner() {
        //jika inginmengakses getCorner pada class yang sama
        // return $this->getCorner();

        //jika ingin mengakses getCorner pada parent Class
        return parent::getCorner();
    }

}