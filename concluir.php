<?php
require 'Classes/TodoList.php';

$todoList = new TodoList();
if (!empty($_POST['id'])) {
    $todoList->concluir($_POST['id']);
}

header("Location: index.php");