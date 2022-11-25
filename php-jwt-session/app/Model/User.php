<?php

use BasicPhpPzn\PhpMvc\App\Database;

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
        if(isset($_SESSION['useractive'])){
            $email = $_SESSION['useractive'];
            $query = "SELECT * FROM " .$this->table. " WHERE email =:email";
            $this->db->query($query);
            $this->db->bind('email', $email);
            return $this->db->single();
        }
    }

    public function cekUser(): int
    {
        $email = $_POST['email'];
        $password = SHA1($_POST['password']);

        $cekdata = "SELECT * FROM ".$this->table." WHERE email =:email AND password =:password ";
        $this->db->query($cekdata);

        $this->db->bind('email',$email);
        $this->db->bind('password',$password);

        $this->db->execute();
        return $this->db->rowCount();
    }
}