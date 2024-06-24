<?php

require_once '../services/AdvertisementService.php';

class AdvertisementController
{
    private $advertisementService;

    public function __construct()
    {
        $this->advertisementService = new AdvertisementService();
    }

    public function listAdvertisements()
    {
        // Fetch advertisements from the AdvertisementService
        $ads = $this->advertisementService->getAllAdvertisements();

        // Load the view with the fetched advertisements data
        require '../views/advertisementList.php'; // Adjust path as per your directory structure
    }
}