<?php

$config = new \backend\config\Connection();
$conn = $config->connect();

if ($conn) {
    echo "Conexão estabelecida com sucesso!";
} else {
    echo "Falha na conexão.";
}

