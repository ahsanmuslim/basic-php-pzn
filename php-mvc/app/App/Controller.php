<?php

namespace BasicPhpPzn\PhpMvc\App;

require_once __DIR__ . '/../Config/config.php';

class Controller 
{
    //Fungsi untuk memanggil view
    public function view($view, $data = [])
    {
        require __DIR__ . '/../View/' . $view . '.php';
    }

    //Fungsi untuk memanggil model
    public function model($model)
    {
        require __DIR__ . '/../Model/' . $model . '.php';
        return new $model;
    }
}