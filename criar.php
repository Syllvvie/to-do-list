<?php
require 'conexao.php';
require 'classes/TodoList.php';

$todoList = new TodoList($conn);
$todoList->criar($_POST['titulo']);

header("Location: index.php");