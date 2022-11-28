<?php

include '../data/ItenerarioChoferData.php';

class ItenerarioChoferBusiness{

    private $ItenerarioChoferData;

    public function ItenerarioChoferBusiness(){
        $this->ItenerarioChoferData = new ItenerarioChoferData();
    }

    public function getAllItenerarioChofer(){
        return $this->ItenerarioChoferData->getAllItenerarioChofer();
    }
}