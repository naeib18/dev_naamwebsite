<?php

class Database {
    private $host = "localhost";
    private $db_name = "dev_nieuwsbrief";
    private $username = "test_user";
    private $password = "Welkom01!";
    public $conn;

    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Verbindingsfout: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
