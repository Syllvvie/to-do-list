<?php
require 'Classes/TodoList.php';

$todoList = new TodoList();
$todoList->excluir($_GET['id']);

header("Location: index.php");