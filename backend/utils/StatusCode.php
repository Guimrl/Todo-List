<?php

namespace backend\utils;

class StatusCode
{
    function getStatusMessage($status): string {
        $status_messages = array(
            200 => 'OK',
            201 => 'Created',
            400 => 'Bad Request',
            404 => 'Not Found',
            500 => 'Internal Server Error',
        );
        return isset($status_messages[$status]) ? $status_messages[$status] : 'Unknown';
    }
}
