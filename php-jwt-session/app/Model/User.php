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

    public function getUser()
    {
        $email = $_SESSION['email'];
        $query = "SELECT * FROM " .$this->table. " WHERE email =:email";
        $this->db->query($query);
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function cekUserLogin(string $email, string $password)
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

    public function update($data, $nama_file)
    {
        $query = "UPDATE " . $this->table . " SET 
                    nama_user =:namauser,
                    email =:email,
                    no_telp =:no_telp,
                    profile =:profile
                    WHERE id_user =:id_user";

        $this->db->query($query);

        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('namauser', $data['namauser']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('profile', $nama_file);

        $this->db->execute();

        return $this->db->rowCount();
    }
}