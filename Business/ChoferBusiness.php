<?php

include '../data/ChoferData.php';

class ChoferBusiness {

    private $ChoferData;

    public function ChoferBusiness() {
        $this->ChoferData = new ChoferData();
    }

    public function getAllChofer() {
        return $this->ChoferData->getAllChofer();
    }

}