<?php

//Implementasi Final Class Constant

class Foo 
{
    final const NAME = "Ahmad";
    const ALAMAT = "klaten";
}

Class Bar extends Foo 
{
    //final const di kelas parent tidak bisa di Override oleh turunannya
    // const NAME = "Susanto";
    const ALAMAT = "Sukabumi";
}

var_dump(Bar::NAME);
var_dump(Bar::ALAMAT);