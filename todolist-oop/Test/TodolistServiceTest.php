<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist():void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajar PHP OOP");
    $todolistRepository->todolist[2] = new Todolist("Belajar PHP Aplikasi Todolist");
    $todolistRepository->todolist[3] = new Todolist("Belajar PHP Database");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function addTodolistTest():void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP Rest API");
    $todolistService->addTodolist("Belajar PHP Laravel");

    $todolistService->showTodolist();
}

function removeTodolistTest():void  
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP Rest API");
    $todolistService->addTodolist("Belajar PHP Laravel");

    $todolistService->showTodolist();
    $todolistService->removeTodolist(4);
    $todolistService->showTodolist();

}

// testShowTodolist();
// addTodolistTest();
removeTodolistTest();