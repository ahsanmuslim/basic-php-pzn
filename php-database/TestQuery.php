<?php

require_once __DIR__ . '/getConnection.php';

$conn = getConnection();

$sql = "SELECT * FROM customers";
$statement = $conn->query($sql);

foreach ($statement as $row) {
    // var_dump($row);
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];

    echo "Id user : $id" . PHP_EOL;
    echo "Name user : $name" . PHP_EOL;
    echo "Email user : $email" . PHP_EOL;
}

$conn = null;