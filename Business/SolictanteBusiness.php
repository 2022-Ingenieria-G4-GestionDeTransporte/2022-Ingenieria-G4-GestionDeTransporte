<?php

include '../data/SolicitantesData.php';

class SolicitanteBusiness {

    private $SolicitantesData;

    public function GiraBusiness() {
        $this->SolicitantesData = new SolcitantesData();
    }

    public function getAllGira() {
        return $this->SolicitantesData->getAllSolicitantes();
    }

}