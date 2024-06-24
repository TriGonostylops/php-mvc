<?php
// services/UserService.php

require_once '../config/database.php';
require_once '../models/User.php';

class UserService
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $user = new User($row['id'], $row['name']);
            $users[] = $user;
        }
        return $users;
    }
}
