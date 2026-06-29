<?php
require 'conexao.php';
require 'classes/TodoList.php';

$todoList = new TodoList($conn);
$todoList->excluir($_GET['id']);

header("Location: index.php");