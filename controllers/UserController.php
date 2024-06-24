<?php
require_once '../services/UserService.php';

class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function listUsers()
    {
        $users = $this->userService->getAllUsers(); // Fetch users from UserService
        require '../views/userList.php'; // Include the view file
    }
}
