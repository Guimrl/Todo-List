<?php

namespace backend\config;

use PDO;
use PDOException;

class Connection
{
    public $host = 'localhost';
    public $dbname = 'facilita';
    public $user = 'root';
    public $pass = '';

    public function connect() {
        try {
            $conn = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );
            
            return $conn;
        } catch (\PDOException $e) {
            echo $e->getMessage();
            // var_dump($e);
        }
    }
}
