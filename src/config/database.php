<?php

class Database
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "desafio_revvo";
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
    }

    public function query($query)
    {
        $result = $this->conn->query($query);
        return $result;
    }
}
