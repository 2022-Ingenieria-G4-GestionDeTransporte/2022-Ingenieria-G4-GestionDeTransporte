<?php

class Participante{

    private $participanteId;
    private $participanteCedula;
    private $participanteNombre;
    private $participanteApellidos;
    private $participanteCarrera;
    private $participanteInstitucion;
    private $giraId;

    function Participante($participanteId, $participanteCedula, $participanteNombre, $participanteApellidos, $participanteCarrera, $participanteInstitucion, $giraId){
        $this->participanteId = $participanteId;
        $this->participanteCedula = $participanteCedula;
        $this->participanteNombre = $participanteNombre;
        $this->participanteApellidos = $participanteApellidos;
        $this->participanteCarrera = $participanteCarrera;
        $this->participanteInstitucion = $participanteInstitucion;
        $this->giraId = $giraId;
    }

    function getParticipanteId() {
        return $this->participanteId;
    }

    function setParticipanteId($participanteId) {
        $this->participanteId = $participanteId;
    }
    
    function getParticipanteCedula() {
        return $this->participanteCedula;
    }

    function setParticipanteCedula($participanteCedula) {
        $this->participanteCedula = $participanteCedula;
    }

    function getParticipanteNombre() {
        return $this->participanteNombre;
    }

    function setParticipanteNombre($participanteNombre) {
        $this->participanteNombre = $participanteNombre;
    }
    
    function getParticipanteApellidos() {
        return $this->participanteApellidos;
    }

    function setParticipanteApellidos($participanteApellidos) {
        $this->participanteApellidos = $participanteApellidos;
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

    function getGiraId() {
        return $this->giraId;
    }

    function setGiraId($giraId) {
        $this->giraId = $giraId;
    }

}
?>