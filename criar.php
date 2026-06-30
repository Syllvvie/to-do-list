<?php
require 'classes/TodoList.php';

if (!empty($_POST['titulo'])) {
    $todoList = new TodoList();
    $todoList->criar($_POST['titulo']);
}

header("Location: index.php");