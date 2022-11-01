<?php

require_once __DIR__ . '/getConnection.php';

$conn = getConnection();


// $username = "admin'; #"; // manipulasi SQL Injection
$username = "admin";
$password = "admin";
$sql = "SELECT * FROM admin WHERE username =:username AND password =:password";

$statement = $conn->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$success = false;
$find_user = null;

foreach ($statement as $row) {
    //jika sekses login
    $success = true;
    $find_user = $row['username'];
}

if($success){
    echo "Sukses login " . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$conn = null;