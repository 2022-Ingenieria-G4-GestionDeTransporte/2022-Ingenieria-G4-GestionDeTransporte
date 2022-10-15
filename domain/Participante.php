<?php

class Participante{

    private $participanteId;
    private $participanteNombre;
    private $participanteCedula;
    private $participanteCarrera;
    private $participanteInstitucion;

    function Participante($participanteId, $participanteNombre, $participanteCedula, $participanteCarrera, $participanteInstitucion){
        $this->participanteId = $participanteId;
        $this->participanteNombre = $participanteNombre;
        $this->participanteCedula = $participanteCedula;
        $this->participanteCarrera = $participanteCarrera;
        $this->participanteInstitucion = $participanteInstitucion;
    }

    function getParticipanteId() {
        return $this->participanteId;
    }

    function setParticipanteId($participanteId) {
        $this->participanteId = $participanteId;
    }

    function getParticipanteNombre() {
        return $this->participanteNombre;
    }

    function setParticipanteNombre($participanteNombre) {
        $this->participanteNombre = $participanteNombre;
    }

    function getParticipanteCedula() {
        return $this->participanteCedula;
    }

    function setParticipanteCedula($participanteCedula) {
        $this->participanteCedula = $participanteCedula;
    }

    function getParticipanteCarrera() {
        return $this->participanteCarrera;
    }

    function setParticipanteCarrera($participanteCarrera) {
        $this->participanteCarrera = $participanteCarrera;
    }

    function getParticipanteInstitucion() {
        return $this->participanteInstitucion;
    }

    function setParticipanteInstitucion($participanteInstitucion) {
        $this->participanteInstitucion = $participanteInstitucion;
    }

}
?>