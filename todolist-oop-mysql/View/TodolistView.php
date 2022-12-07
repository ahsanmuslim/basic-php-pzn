<?php

namespace View;

use Entity\Todolist;
use Service\TodolistService;
use Helper\InputHelper;

class TodolistView {

    private TodolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
        $this->todolistService = $todolistService;
    }

    function showTodolist():void
    {
        while (true) {
            $this->todolistService->showTodolist();

            echo "Menu Aplikasi : " . PHP_EOL;
            echo "1. Tambah Todolist " . PHP_EOL;
            echo "2. Hapus Todolist " . PHP_EOL;
            echo "x. Keluar Aplikasi " . PHP_EOL;

            $pilihan = InputHelper::input("Pilih");

            if($pilihan == "1"){
                $this->addTodolist();
            } else if ($pilihan == "2"){
                $this->removeTodolist();
            } else if ($pilihan == "x"){
                break;
            } else {
                echo "Pilihan tidak ada !!" . PHP_EOL;
            }
        }

        echo "Sampai jumpa lagi !!" . PHP_EOL;
    }

    function addTodolist():void
    {
        echo "Menambah Todolist : " . PHP_EOL;

        $todo = InputHelper::input("Todo (x untuk batal)");

        if($todo == "x"){
            echo "Batal menambah todolist " . PHP_EOL;
        } else {
            $this->todolistService->addTodolist($todo); 
        }
    }

    function removeTodolist():void
    {
        echo "Menghapus Todolist " . PHP_EOL;

        $pilihan = InputHelper::input("Nomor ( x untuk batalkan )");

        if($pilihan == "x"){
            echo "Batal menghapus to do";
        } else {
            $this->todolistService->removeTodolist($pilihan);
        }
    }

}