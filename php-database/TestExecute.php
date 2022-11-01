<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    -- VALUES ('ahsan', 'Ahsan Susanto', 'kikielbe@gmail.com');
    -- VALUES ('ahsn', 'Susanto', 'ahsancoding@gmail.com');
    VALUES ('sstn', 'Amir Khan', 'amir@gmail.com');
SQL;

$connection->exec($sql);

$connection = null;