<?php

    interface AdRepository{

        public static function viewAdById($adId);
        public static function getAllAds();
        public static function getAdListByUserId($id);
        public static function createAd($ad, $userId);
        public static function adReport($report);
        public static function deleteAd($userId, $adId);
        public static function updateAd($ad, $adId, $userId);
    }

?>