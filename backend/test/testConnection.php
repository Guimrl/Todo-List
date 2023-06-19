<?php

namespace backend\test;

use backend\config\Connection;

$config = new Connection();
$conn = $config->connect();

if ($conn) {
    echo "Conexão estabelecida com sucesso!";
} else {
    echo "Falha na conexão.";
}
