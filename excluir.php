<?php
require 'Classes/TodoList.php';

$todoList = new TodoList();
if (!empty($_POST['id'])) {
    $todoList->excluir($_POST['id']);
}

header("Location: index.php");