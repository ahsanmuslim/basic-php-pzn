<?php

require_once __DIR__ . '/getConnection.php';

$conn = getConnection();

$sql = "SELECT * FROM admin";
$statement = $conn->query($sql);

$customer = $statement->fetchAll();
var_dump($customer);

$conn = null;