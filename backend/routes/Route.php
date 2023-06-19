<?php

namespace backend\routes;

use backend\config\Connection;
use backend\repository\TaskManager;

class Route
{
    public function route(): void
    {
        header('Content-Type: application/json');

        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestPath = $_SERVER['REQUEST_URI'];

        $connection = new Connection();

        if ($requestMethod === 'GET') {
            if ($requestPath === '/') {
                echo json_encode("Hello, world!");
            }

            if ($requestPath === '/task') {
                $taskManager = new TaskManager($connection);
                $tasks = $taskManager->getTasks();
                echo json_encode($tasks);
            }
        } else {
            http_response_code(404);
            echo json_encode(['message' => 'Endpoint não encontrado']);
        }
    }
}
