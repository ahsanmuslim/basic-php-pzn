<?php

namespace Model;

class Comment {

    private ?int $id;
    private ?string $email;
    private ?string $comment;

    public function __construct(?int $id = null,
                                ?string $email = null,
                                ?string $comment = null)
    {
    }
    

    public function getId():?int
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getEmail():?string
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getComment():?string
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }
}