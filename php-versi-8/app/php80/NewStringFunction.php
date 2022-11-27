<?php
namespace Ahmad\PhpVersi8\php80;

//Implementasi New String Function

//1. str_contains = mengecek apakah String mengandung kata tertentu
// return value Boolean
var_dump(str_contains("Ahmad Susanto", "Ahmad"));
var_dump(str_contains("Ahmad Susanto", "Ahmad"));

//2. str_starts_with = mengecek apakah String di awali dengan kata tertentu
// return value Boolean
var_dump(str_starts_with("Ahmad Susanto", "Ahmad"));
var_dump(str_starts_with("Ahmad Susanto", "Susanto"));

//2. str_ends_with = mengecek apakah String di akhiri dengan kata tertentu
// return value Boolean
var_dump(str_ends_with("Ahmad Susanto", "Ahmad"));
var_dump(str_ends_with("Ahmad Susanto", "Susanto"));