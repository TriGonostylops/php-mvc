<?php

class Advertisement
{
    private $id;
    private $userId;
    private $title;
    private $userName; // Add a property to hold the user name

    public function __construct($id, $userId, $title, $userName)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->userName = $userName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getUserName()
    {
        return $this->userName;
    }
}