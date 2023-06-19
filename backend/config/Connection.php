<?php

namespace backend\config;

class Connection
{
    public $host = 'localhost';
    public $dbname = 'facilita';
    public $user = 'root';
    public $pass = '';

    public function connect(): \PDO
    {
        try {
            $conn = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
            return $conn;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
