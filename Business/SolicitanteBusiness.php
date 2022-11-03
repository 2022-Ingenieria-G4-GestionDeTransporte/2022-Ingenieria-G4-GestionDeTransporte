<?php

include '../data/SolicitantesData.php';

class SolicitanteBusiness {

    private $SolicitantesData;

    public function SolicitanteBusiness() {
        $this->SolicitantesData = new SolcitantesData();
    }

    public function getAllSolicitantes() {
        return $this->SolicitantesData->getAllSolicitantes();
    }

}