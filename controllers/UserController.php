<?php
require_once 'services/UserService.php';

class UserController
{
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function listUsers()
    {
        $users = $this->userService->getAllUsers();
        require_once 'views/userList.php';
    }
}
