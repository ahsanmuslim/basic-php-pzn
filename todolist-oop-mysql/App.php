<?php

use Database\Database;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Service/TodolistService.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/View/TodolistView.php';  
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Database/Database.php';

echo "Aplikasi Todolist ";

$connection = new Database();
$con = $connection->getConnection();
$todolistRepository = new TodolistRepositoryImpl($con);
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();


