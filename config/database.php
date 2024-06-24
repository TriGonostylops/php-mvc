<?php
// config/database.php

class Database
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $host = 'localhost';   // Database server host
        $dbname = 'mvc';   // Database name
        $username = 'root';    // Database username
        $password = '';        // Database password

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

        try {
            $this->connection = new PDO($dsn, $username, $password);
            // Set PDO attributes if needed (e.g., error mode)
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
