<?php

//Implementasi Named Argument

namespace Ahmad\PhpVersi8\php80;

function greeting(string $first = "Susanto", string $middle = "Heru", string $last = "Kartono")
{
    echo "Selamat datang,  $first $middle $last";
    echo '<br>';
}

greeting();
greeting("Ahmad", "Fikri", "Zainuddin");
greeting(last: "Zainuddin", first:"Ahmad", middle:"Fikri");
greeting(first:"Ahmad",last: "Zainuddin");