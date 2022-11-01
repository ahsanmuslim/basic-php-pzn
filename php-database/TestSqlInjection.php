<?php

require_once __DIR__ . '/getConnection.php';

$conn = getConnection();

$username = $conn->quote("admin'; #");
// $username = "admin'; #"; // manipulasi SQL Injection
$password = $conn->quote("admin");
// $password = "password salah"; //password salah tetap bisa login
// $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";

$statement = $conn->query($sql);

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
