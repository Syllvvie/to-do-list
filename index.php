<?php
require 'Classes/TodoList.php';

$todolist = new TodoList();
$tarefas = $todolist->listar();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Tarefas</title>
        <script src="https://kit.fontawesome.com/22fd3c2633.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="titulo">To do List</div>

            <form class="form-criar" method="POST" action="criar.php">
                <input type="text" name="titulo" placeholder="Digite a tarefa...">
                <button type="submit">Criar</button>
            </form>

            <div class="table-container">
                <table class="lista">
                    <?php foreach ($tarefas as $t) { ?>
                        <tr class="tarefa">
                            <td><a href="concluir.php?id=<?= $t['id'] ?>">
                                <?php if ($t['concluida']): ?>
                                    <i class="fa-solid fa-square-check"></i>
                                <?php else: ?>
                                    <i class="fa-regular fa-square"></i>
                                <?php endif; ?>
                            </a></td>
                            <td><span <?= $t['concluida'] ? ' style="text-decoration: line-through;"' : '' ?>><?= $t['titulo'] ?></span></td>
                            <td><a href="excluir.php?id=<?= $t['id'] ?>"><i class="fa-solid fa-x" style="color: rgb(255, 10, 10);"></i></a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </body>
</html>