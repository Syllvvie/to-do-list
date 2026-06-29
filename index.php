<?php
require 'conexao.php';
require 'classes/TodoList.php';

$todoList = new TodoList($conn);
$tarefas = $todoList->listar();

foreach ($tarefas as $t) {
    echo $t['titulo'] . "<br>";
}