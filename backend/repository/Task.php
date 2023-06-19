<?php

namespace backend\repository;

class Task
{
    private $id;
    private $id_status;
    private $task;
    private $date_register;

    public function __construct($id, $id_status, $task, $date_register)
    {
        $this->id = $id;
        $this->id_status = $id_status;
        $this->task = $task;
        $this->date_register = $date_register;
    }

    public function getId(): Task
    {
        return $this->id;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function setTask($task): void
    {
        $this->task = $task;
    }

    public function getStatus(): Task
    {
        return $this->id_status;
    }

    public function setStatus($id_status): void
    {
        $this->id_status = $id_status;
    }

    public function getDate(): Task
    {
        return $this->date_register;
    }

    public function setDate($date_register): void
    {
        $this->date_register = $date_register;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'id_status' => $this->id_status,
            'tarefa' => $this->task,
            'data_cadastro' => $this->date_register
        ];
    }
}
