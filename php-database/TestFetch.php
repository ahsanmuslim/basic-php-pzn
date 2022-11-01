<?php

require_once __DIR__ . '/getConnection.php';

$conn = getConnection();

$username = "ahsan";
$password = "ahsani1e";
$sql = "SELECT * FROM admin WHERE username =:username AND password =:password";

$statement = $conn->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

if($row = $statement->fetch()){
    echo "Sukses login" . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$conn = null;