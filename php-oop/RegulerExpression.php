<?php

$matches = [];
//mencari string yang match
$result = (bool)preg_match_all("/ahsan|asan|anto/i" , "Ahmad Susanto", $matches);
var_dump($result);
var_dump($matches);

//mengganti string yang match
$ganti = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING & BANGSAT !!!");
var_dump($ganti);

//mengganti karakter khusus 
$result2 = preg_split("/[\s,-]/", "Ahmad Susanto,Programmer-Web");
var_dump($result2);
