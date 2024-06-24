<?php
// services/AdvertisementService.php

require_once '../config/database.php';
require_once '../models/Advertisement.php';

class AdvertisementService {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAllAdvertisements() {
        $stmt = $this->db->prepare("
            SELECT advertisements.id, advertisements.userid, advertisements.title, users.name AS userName
            FROM advertisements
            JOIN users ON advertisements.userid = users.id
        ");
        $stmt->execute();
        $advertisements = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $advertisement = new Advertisement($row['id'], $row['userid'], $row['title'], $row['userName']);
            $advertisements[] = $advertisement;
        }
        return $advertisements;
    }
}