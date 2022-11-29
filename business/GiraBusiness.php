<?php

include '../data/GirasData.php';

class GiraBusiness {

    private $GirasData;

    public function GiraBusiness() {
        $this->GirasData = new GirasData();
    }

    public function getAllGira() {
        return $this->GirasData->getAllGira();
    }
    
    public function getGira($idGira) {
        return $this->GirasData->getGira($idGira);
    }

    public function getAllGiraAprobadas() {
        return $this->GirasData->getAllGiraAprobadas();
    }

}