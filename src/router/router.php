<?php

include __DIR__ . "/../controllers/task.controller.php";

$task_controller = new TaskController();

$router = new \Bramus\Router\Router();

$router->get("/", function () {
  include_once __DIR__ . "/../views/index.view.php";
});

$router->get("/tasks", function () {
  echo "Get task";
});

$router->post("/tasks/create", function () {
  echo "Create task";
});

$router->put("/tasks/create", function () {
  echo "Edit task";
});

$router->delete("/tasks/create", function () {
  echo "Delete task";
});

$router->run();
