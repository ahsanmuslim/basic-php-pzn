<?php

namespace Database;

use PDO;

class Database
{
    private string $database = 'todolist';
    private string $host = '127.0.0.1';
    private string $user = 'root';
    private string $pass = '';

    public function getConnection(): \PDO
    {
        $option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
		];

        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $con = new \PDO($dsn, $this->user, $this->pass, $option);
            return $con;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

}
