<?php

require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../Helper/InputHelper.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Entity/Todolist.php';


use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist():void
{
    
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Study Kasus");

    $todolistView->showTodolist();
}

function testViewAddTodolist():void
{
    
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Study Kasus");

    $todolistService->showTodolist();
    
    $todolistView->addTodolist();
    
    $todolistService->showTodolist();

    $todolistView->addTodolist();
    
    $todolistService->showTodolist();
}

function testViewRemoveTodolist():void
{
    
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Study Kasus");

    $todolistService->showTodolist();
    
    $todolistView->removeTodolist();
    
    $todolistService->showTodolist();

    $todolistView->removeTodolist();
    
    $todolistService->showTodolist();
}

// testViewShowTodolist();
// testViewAddTodolist();
testViewRemoveTodolist();
