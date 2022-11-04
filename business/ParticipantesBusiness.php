<?php

include '../data/ParticipantesData.php';

class ParticipantesBusiness {

    private $ParticipantesData;

    public function ParticipantesBusiness() {
        $this->ParticipantesData = new ParticipantesData();
    }

    public function getAllParticipantes() {
        return $this->ParticipantesData->getAllParticipantes();
    }

}