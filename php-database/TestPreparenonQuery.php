<?php

require_once __DIR__ . '/getConnection.php';

$conn = getConnection();

$username = "ahsan";
$password = "ahsani123";
$sql = "INSERT INTO admin (username, password) VALUES (:username, :password)";

$statement = $conn->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();


$conn = null;