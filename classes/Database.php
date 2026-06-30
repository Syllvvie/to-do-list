<?php
class Database {
    private $host = "localhost";
    private $db = "todolist";
    private $username = "root";
    private $password = "";
    private $pdo;

    public function connect() {
        if (!$this->pdo) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->db}";
                $this->pdo = new PDO($dsn, $this->username, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro ao conectar ao banco de dados: " . $e->getMessage());
            }
        }
        return $this->pdo;
    }
}