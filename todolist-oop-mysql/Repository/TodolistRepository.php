<?php

namespace Repository;

use PDO;
use Database\Database;
use Entity\Todolist;

interface TodolistRepository {

    function save(Todolist $todolist):void;

    function remove(int $number):bool;

    function findAll():array;
    
}

class TodolistRepositoryImpl implements TodolistRepository 
{
    
    public array $todolist = [];
    private \PDO $conn;
    
    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }

    function save(Todolist $todolist):void
    {
        $query = "INSERT INTO todolist(todo) values(?)";
        $statement = $this->conn->prepare($query);
        $statement->execute([$todolist->getTodo()]);
    }
    
    function remove(int $number):bool
    {
        $query = "DELETE FROM todolist WHERE id = ?";
        $statement = $this->conn->prepare($query);
        $statement->execute([$number]);
        $result = $statement->rowCount();
        
        if($result > 0){
            return true;
        } else {
            return false;
        }
    }
    
    function findAll():array
    {
        $query = "SELECT * FROM todolist";
        $statement = $this->conn->prepare($query);
        $statement->execute();
		return $statement->fetchAll (PDO::FETCH_ASSOC);
    }

}