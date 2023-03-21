<?php

class Database
{
    private $user;
    private $pass;
    private $name;
    private $host;
    private $port;
    private $connection;

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
            $this->connection = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->name", $this->user, $this->pass);

            return $this->connection;
        } catch (Exception $e) {
            echo "An error ocurred when connecting database: " . $e->getMessage();
        }
    }

    public function query(string $q)
    {
        try {
            $stmt = $this->connection->query($q);
            $data = $stmt->fetchAll();

            return $data;
        } catch (Exception $e) {
            echo "An error ocurred in query: " . $e->getMessage();
        }
    }

    public function execute(string $q, array $vars)
    {
        try {
            $stmt = $this->connection->prepare($q);
            $stmt->execute($vars);
            $data = $stmt->fetchAll();

            return $data;
        } catch (Exception $e) {
            echo "An error ocurred in query: " . $e->getMessage();
        }
    }
}
