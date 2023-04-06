<?php

class TaskModel
{
    private $db;

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function findAll()
    {
        $tasks = $this->db->query(" SELECT * FROM tasks ");

        return $tasks;
    }

    public function findById()
    {
    }

    public function create_new()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
