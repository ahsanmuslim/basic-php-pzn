<?php

$host = "localhost";
$port = "3306";
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi dengan database MySQL" . PHP_EOL;

    //menutup koneksi ke database 
    $connection = null;
} catch (PDOException $exception) {
    echo "Gagal terkoneksi dengan database MySQL : " . $exception->getMessage() . PHP_EOL;
}