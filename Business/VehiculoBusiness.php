<?php

include '../data/VehiculoData.php';

class VehiculoBusiness {

    private $VehiculoData;

    public function VehiculoBusiness() {
        $this->VehiculoData = new VehiculoData();
    }

    public function getAllVehiculo() {
        return $this->VehiculoData->getAllVehiculo();
    }

}