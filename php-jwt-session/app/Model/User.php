<?php

use BasicPhpPzn\PhpJwtSession\App\Database;

class User 
{
    private $table = "user";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUser(): array
    {
        $email = $_SESSION['email'];
        $query = "SELECT * FROM " .$this->table. " WHERE email =:email";
        $this->db->query($query);
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function cekUserLogin(string $email, string $password): array
    {
        $cekdata = "SELECT * FROM ".$this->table." WHERE email =:email AND password =:password ";
        $this->db->query($cekdata);

        $this->db->bind('email',$email);
        $this->db->bind('password',$password);

        $this->db->execute();
        return $this->db->single();
    }

    public function simpanJWT(string $jwt, string $email): void
    {
        $query = "UPDATE user SET jwt =:jwt WHERE email =:email";
        $this->db->query($query);

        $this->db->bind("email", $email);
        $this->db->bind("jwt", $jwt);
        $this->db->execute();
    }

    public function hapusJWT(): void
    {
        $email = $_SESSION['email'];
        $query = "UPDATE user SET jwt = NULL WHERE email =:email";
        $this->db->query($query);

        $this->db->bind("email", $email);
        $this->db->execute();
    }

}