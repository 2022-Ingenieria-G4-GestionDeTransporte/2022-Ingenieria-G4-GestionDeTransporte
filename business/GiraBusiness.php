<?php

include '../data/GirasData.php';

class GiraBusiness {

    private $GirasData;

    public function getAllGira() {
        return $this->GirasData->getAllGira();
    }

}