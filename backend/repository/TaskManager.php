<?php

namespace backend\repository;

use PDO;
use backend\config\Connection;

class TaskManager
{
    private $tasks = [];
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection->connect();
    }

    public function getTasks(): array
    {
        $query = '
                SELECT 
                    t.id, s.status, t.tarefa, t.data_cadastrado
                FROM 
                    tb_tarefas AS t
                    LEFT JOIN tb_status AS s ON (t.id_status = s.id);
            ';
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
