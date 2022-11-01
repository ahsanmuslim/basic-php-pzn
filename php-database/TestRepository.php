<?php

require_once __DIR__ . '/getConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use CommentRepository\CommentRepositoryImpl;
use Model\Comment;

$conn = getConnection();
$repo = new CommentRepositoryImpl($conn);

$comment = new Comment(null, "ahsan@gmail.com", "hello");
$newComment = $repo->insert($comment);


var_dump($newComment->getId());

$conn = null;