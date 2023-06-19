<?php

namespace backend\routes;

use backend\utils\StatusCode;
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
        $statusCode = new StatusCode();

        if ($requestMethod === 'GET') {
            if ($requestPath === '/') {
                echo json_encode("Hello, world!");
            }

            if ($requestPath === '/task') {
                try {
                    $taskManager = new TaskManager($connection);
                    $tasks = $taskManager->getTasks();
                    http_response_code(200);
                    $message = $statusCode->getStatusMessage(http_response_code());
                    echo json_encode([$tasks, 'message' => $message, 'Status' => http_response_code()]);
                } catch (\Throwable $th) {
                    http_response_code(404);
                    echo json_encode([$th->getMessage(), 'message' => $message . 'Endpoint não encontrado', 'Status' => http_response_code()]);
                }
            }
        } else {
            http_response_code(404);
            echo json_encode(['message' => 'Endpoint não encontrado']);
        }
    }
}
