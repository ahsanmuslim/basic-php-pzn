<?php

namespace CommentRepository;

use Model\Comment;

interface CommentRepository
{

    function insert(Comment $comment): Comment;

    function findbyId(int $id): ?Comment;

    function findAll(): array;

}

class CommentRepositoryImpl implements CommentRepository
{
    private \PDO $conn;

    public function __construct(\PDO $conn)
    {        
    }

    public function insert(Comment $comment): Comment
    {
        $sql = "INSERT INTO comment (email, comment) VALUES (?, ?)";
        $statement = $this->conn->prepare($sql);
        $statement->execute([$comment->getEmail(), $comment->getComment()]);

        $id = $this->conn->lastInsertId();
        return $comment;
    }

    public function findbyId(int $id): ?Comment
    {
        $sql = "SELECT * FROM comments WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->execute([$id]);

        if($row = $statement->fetch()){
            return new Comment(
                $row["id"],
                $row["email"],
                $row["comment"]
            );
        } else {
            return null;
        }
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM comments";
        $statement = $this->conn->query($sql);

        $array = [];

        while ($row = $statement->fetch()){
            $array[] = new Comment(
                $row["id"],
                $row["email"],
                $row["comment"]
            );
        }

        return $array;

    }
}