<?php
require_once 'config/database.php';
require_once 'models/Advertisement.php';

class AdvertisementService {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllAdvertisements() {
        $stmt = $this->db->prepare("SELECT advertisements.*, users.name as username FROM advertisements JOIN users ON advertisements.userid = users.id");
        $stmt->execute();
        $ads = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $ads[] = ['ad' => new Advertisement($row['id'], $row['userid'], $row['title']), 'username' => $row['username']];
        }
        return $ads;
    }
}