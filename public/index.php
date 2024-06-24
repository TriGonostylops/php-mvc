<?php

require_once '../controllers/IndexController.php';
require_once '../controllers/UserController.php';
require_once '../controllers/AdvertisementController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $indexController = new IndexController();
        $indexController->index();
        break;
    case 'userList':
        $userController = new UserController();
        $userController->listUsers();
        break;
    case 'advertisementList':
        $advertisementController = new AdvertisementController();
        $advertisementController->listAdvertisements();
        break;
    default:
        // Handle invalid actions or 404 error
        echo '404 Not Found';
        break;
}
