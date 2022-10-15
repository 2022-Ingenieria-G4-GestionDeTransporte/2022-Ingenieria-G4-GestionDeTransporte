<?php

class DestinoGira{

    private $destinoGiraId;
    private $destinoGiraProvincia; 
    private $destinoGiraCanton;
    private $destinoGiraDistrito;
    private $destinoGiraHospedaje; 
    private $destinoGiraSalida;
    private $destinoGiraLlegada;

    function Curso($destinoGiraId, $destinoGiraProvincia,$destinoGiraCanton, $destinoGiraDistrito,
    $destinoGiraHospedaje, $destinoGiraSalida,$destinoGiraLlegada){
        $this->destinoGiraId = $destinoGiraId;
        $this->destinoGiraProvincia = $destinoGiraProvincia;
        $this->destinoGiraCanton = $destinoGiraCanton;
        $this->destinoGiraDistrito = $destinoGiraDistrito;
        $this->destinoGiraHospedaje = $destinoGiraHospedaje;
        $this->destinoGiraSalida = $destinoGiraSalida;
        $this->destinoGiraLlegada = $destinoGiraLlegada;
    }

    
    function getDestinoGiraId() {
        return $this->destinoGiraId;
    }

    function setDestinoGiraId($destinoGiraId) {
        $this->destinoGiraId = $destinoGiraId;
    }

    function getDestinoGiraProvincia() {
        return $this->destinoGiraProvincia;
    }

    function setDestinoGiraProvincia($destinoGiraProvincia) {
        $this->destinoGiraProvincia = $destinoGiraProvincia;
    }

    function getDestinoGiraCanton() {
        return $this->destinoGiraCanton;
    }

    function setDestinoGiraCanton($destinoGiraCanton) {
        $this->destinoGiraCanton = $destinoGiraCanton;
    }

    function getDestinoGiraDistrito() {
        return $this->destinoGiraDistrito;
    }

    function setDestinoGiraDistrito($destinoGiraDistrito) {
        $this->destinoGiraDistrito = $destinoGiraDistrito;
    }

    function getDestinoGiraHospedaje() {
        return $this->destinoGiraHospedaje;
    }

    function setDestinoGiraHospedaje($destinoGiraHospedaje) {
        $this->destinoGiraHospedaje = $destinoGiraHospedaje;
    }

    function getDestinoGiraSalida() {
        return $this->destinoGiraSalida;
    }

    function setDestinoGiraSalida($destinoGiraSalida) {
        $this->destinoGiraSalida = $destinoGiraSalida;
    }

    function getDestinoGiraLlegada() {
        return $this->destinoGiraLlegada;
    }

    function setDestinoGiraLlegada($destinoGiraLlegada) {
        $this->destinoGiraLlegada = $destinoGiraLlegada;
    }



}



?>