<?php

class Database {

    //Singleton db instance for connection
    private static $instance = null;
    private $connection;

    private $host = 'localhost';
    private $dbname = 'mvc';
    private $username = 'root';
    private $password = '';

    // Constructor is private to prevent multiple instances
    private function __construct() {
        try {
            // Create a new PDO instance
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            // Set error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // If there is an error connecting, catch it and display a message
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Method to get the singleton instance of the Database class
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Method to get the PDO connection object
    public function getConnection() {
        return $this->connection;
    }
}
