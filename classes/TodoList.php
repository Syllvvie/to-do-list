<?php
class TodoList {
    private $conn;

    public function __construct($conexao) {
        $this->conn = $conexao;
    }

    //Listar
    public function listar() {
        $sql = "SELECT * FROM tarefas";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}