<?php
require_once 'services/AdvertisementService.php';

class AdvertisementController
{
    private $adService;

    public function __construct()
    {
        $this->adService = new AdvertisementService();
    }

    public function listAdvertisements()
    {
        $ads = $this->adService->getAllAdvertisements();
        require_once 'views/advertisementList.php';
    }
}