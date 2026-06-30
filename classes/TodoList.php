<?php
require_once 'Database.php';

class TodoList {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    //Listar
    public function listar() {
        $sql = "SELECT * FROM tarefas";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Criar
    public function criar($titulo) {
        $sql = "INSERT INTO tarefas (titulo) VALUES (:titulo)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        return $stmt->execute();
    }

    //Excluir
    public function excluir($id) {
        $sql = "DELETE FROM tarefas WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    //Concluida
    public function concluir($id) {
        $sql = "UPDATE tarefas SET concluida = NOT concluida WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}