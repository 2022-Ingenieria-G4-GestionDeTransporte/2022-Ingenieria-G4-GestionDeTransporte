<?php

class Chofer{

    private $choferId;
    private $choferCedula;
    private $choferNombre;
    private $choferLicenciaVigente;
    private $choferFechaVencimientoLicencia;
    private $choferPassword;

    function Chofer($choferId, $choferCedula, $choferNombre, $choferLicenciaVigente, $choferFechaVencimientoLicencia, $choferPassword){
        $this->choferId = $choferId;
        $this->choferCedula = $choferCedula;
        $this->choferNombre = $choferNombre;
        $this->choferLicenciaVigente = $choferLicenciaVigente;
        $this->choferFechaVencimientoLicencia = $choferFechaVencimientoLicencia;
        $this->choferPassword = $choferPassword;
    }

    function getchoferId() {
        return $this->choferId;
    }

    function setchoferId($choferId) {
        $this->choferId = $choferId;
    }

    function getchoferCedula() {
        return $this->choferCedula;
    }

    function setchoferCedula($choferCedula) {
        $this->choferCedula = $choferCedula;
    }

    function getchoferNombre() {
        return $this->choferNombre;
    }

    function setchoferNombre($choferNombre) {
        $this->choferNombre = $choferNombre;
    }

    function getchoferLicenciaVigente() {
        return $this->choferLicenciaVigente;
    }

    function setchoferLicenciaVigente($choferLicenciaVigente) {
        $this->choferLicenciaVigente = $choferLicenciaVigente;
    }

    function getchoferFechaVencimientoLicencia() {
        return $this->choferFechaVencimientoLicencia;
    }

    function setchoferFechaVencimientoLicencia($choferFechaVencimientoLicencia) {
        $this->choferFechaVencimientoLicencia = $choferFechaVencimientoLicencia;
    }

    function getchoferPassword() {
        return $this->choferPassword;
    }

    function setchoferPassword($choferPassword) {
        $this->choferPassword = $choferPassword;
    }


}