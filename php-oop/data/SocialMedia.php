<?php 

class SocialMedia {
    public string $username;
    public string $password;

    //jika final maka function tidak akan bisa di override oleh kelas turunannya 
    final public function login(string $username, string $password):bool 
    {
        return true;
    }
}

//maka kelas facebook tidak bisa diturunkan 
final class Facebook extends SocialMedia {
    public function logins(string $username, string $password):bool 
    {
        return true;
    }

}

//ini akan error 
// class FakeFacebook extends Facebook {}