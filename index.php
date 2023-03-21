<?php

require(__DIR__ . "/vendor/autoload.php");

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

require(__DIR__ . "/src/config/db.php");

$db = new Database(
  $_ENV["DB_USER"],
  $_ENV["DB_PASS"],
  $_ENV["DB_NAME"],
  $_ENV["DB_HOST"],
  $_ENV["DB_PORT"]
);

$db->connect();

require(__DIR__ . "/src/router/router.php");
