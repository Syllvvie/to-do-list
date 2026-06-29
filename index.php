<?php
require 'conexao.php';
require 'classes/TodoList.php';

$todoList = new TodoList($conn);
$tarefas = $todoList->listar();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Tarefas</title>
    </head>
    <body>
        <form method="POST" action="criar.php">
        <input type="text" name="titulo" placeholder="Digite a tarefa...">
        <button type="submit">Criar</button>
        </form>
        <table>
            <?php foreach ($tarefas as $t) { ?>
                <tr>
                    <td><?php echo $t['titulo']; ?></td>
                    <td><a href="excluir.php?id=<?php echo $t['id']; ?>">Excluir</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>