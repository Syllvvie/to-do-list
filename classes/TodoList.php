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

    //Criar
    public function criar($titulo) {
        $sql = "INSERT INTO tarefas (titulo) VALUES (:titulo)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        return $stmt->execute();
    }

    //Excluir
    public function excluir($id) {
        $sql = "DELETE FROM tarefas WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}