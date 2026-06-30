<?php
require 'classes/TodoList.php';

$todoList = new TodoList();
$todoList->concluir($_GET['id']);

header("Location: index.php");