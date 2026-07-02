<?php
require 'classes/TodoList.php';
$todoList = new TodoList();
if (!empty($_POST['titulo'])) {
    $todoList->criar($_POST['titulo']);
}

header("Location: index.php");