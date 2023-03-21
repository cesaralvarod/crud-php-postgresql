<?php

include __DIR__ . "/../models/task.model.php";

class TaskController
{
  private $model;

  public function __construct()
  {
    $this->model = new TaskModel();
  }

  public function getAll()
  {
    $tasks = $this->model->findAll();

    return $tasks;
  }

  public function getById()
  {
  }

  public function update()
  {
  }

  public function delete()
  {
  }
}
