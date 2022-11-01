<?php

require_once __DIR__ . '/getConnection.php';

$conn = getConnection();

$conn->exec("INSERT INTO comment(email, comment) VALUES ('Susanto@gmail.com', 'Hello')");
$id = $conn->lastInsertId();

echo "Id trakhir adalah $id" . PHP_EOL;

$conn = null;