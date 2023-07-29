<?php

class Database
{
    private $host = '';
    private $port = '';
    private $database = '';
    private $user = '';
    private $password = '';
    private $conn;

    public function __construct()
    {
        $this->host = $_ENV['DB_HOST'];
        $this->port = $_ENV['DB_PORT'];
        $this->database = $_ENV['DB_DATABASE'];
        $this->user = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->connect();
    }

    public function query($query)
    {
        $result = $this->conn->query($query);
        return $result;
    }

    public function connect()
    {
        // Prevenir multi conexões desnecessarias
        if(isset($this->conn)) {
            return $this->conn;
        }

        $this->conn = new PDO('mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->database, $this->user, $this->password);
        return $this->conn;
    }
}
