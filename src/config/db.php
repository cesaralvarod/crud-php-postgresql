<?php

class Database
{
    private $user;
    private $pass;
    private $name;
    private $host;
    private $port;

    public function __construct(
        string $user,
        string $pass,
        string $name,
        string $host,
        string $port
    ) {
        $this->user = $user;
        $this->pass = $pass;
        $this->name = $name;
        $this->host = $host;
        $this->port = $port;
    }

    public function connect()
    {
        try {
            $connection = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->name", $this->user, $this->pass);

            return $connection;
        } catch (Exception $e) {
            echo "An error ocurred when connecting database: " . $e->getMessage();
        }
    }
}
