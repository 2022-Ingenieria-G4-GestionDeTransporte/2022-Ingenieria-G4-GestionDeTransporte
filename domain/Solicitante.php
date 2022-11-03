<?php

class Solicitante{

    private $solicitanteId;
    private $solicitanteCedula;
    private $solicitanteNombre;
    private $solicitanteApellidos;
    private $solicitanteCorreo;
    private $solicitanteCargo;
    private $solicitanteLicenciaVigente;
    private $solicitanteFechaVencimientoLicencia;
    private $solicitantepassword;

    function Solicitante($solicitanteId, $solicitanteCedula, $solicitanteNombre, $solicitanteApellidos, $solicitanteCorreo, $solicitanteCargo, $solicitanteLicenciaVigente, $solicitanteFechaVencimientoLicencia, $solicitantepassword){
        $this->solicitanteId = $solicitanteId;
        $this->solicitanteCedula = $solicitanteCedula;
        $this->solicitanteNombre = $solicitanteNombre;
        $this->solicitanteApellidos = $solicitanteApellidos;
        $this->solicitanteCorreo = $solicitanteCorreo;
        $this->solicitanteCargo = $solicitanteCargo;
        $this->solicitanteLicenciaVigente = $solicitanteLicenciaVigente;
        $this->solicitanteFechaVencimientoLicencia = $solicitanteFechaVencimientoLicencia;
        $this->solicitantepassword = $solicitantepassword;
    }

    function getSolicitanteId() {
        return $this->solicitanteId;
    }

    function setSolicitanteId($solicitanteId) {
        $this->solicitanteId = $solicitanteId;
    }

    function getSolicitanteCedula() {
        return $this->solicitanteCedula;
    }

    function setSolicitanteCedula($solicitanteCedula) {
        $this->solicitanteCedula = $solicitanteCedula;
    }

    function getSolicitanteNombre() {
        return $this->solicitanteNombre;
    }

    function setSolicitanteNombre($solicitanteNombre) {
        $this->solicitanteNombre = $solicitanteNombre;
    }

    function getSolicitanteApellidos() {
        return $this->solicitanteApellidos;
    }

    function setSolicitanteApellidos($solicitanteApellidos) {
        $this->solicitanteApellidos = $solicitanteApellidos;
    }

    function getSolicitanteCorreo() {
        return $this->solicitanteCorreo;
    }

    function setSolicitanteCorreo($solicitanteCorreo) {
        $this->solicitanteCorreo = $solicitanteCorreo;
    }

    function getSolicitanteCargo() {
        return $this->solicitanteCargo;
    }

    function setSolicitanteCargo($solicitanteCargo) {
        $this->solicitanteCargo = $solicitanteCargo;
    }

    function getSolicitanteLicenciaVigente() {
        return $this->solicitanteLicenciaVigente;
    }

    function setSolicitanteLicenciaVigente($solicitanteLicenciaVigente) {
        $this->solicitanteLicenciaVigente = $solicitanteLicenciaVigente;
    }

    function getSolicitanteFechaVencimientoLicencia() {
        return $this->solicitanteFechaVencimientoLicencia;
    }

    function setSolicitanteFechaVencimientoLicencia($solicitanteFechaVencimientoLicencia) {
        $this->solicitanteFechaVencimientoLicencia = $solicitanteFechaVencimientoLicencia;
    }

    function getSolicitantepassword() {
        return $this->solicitantepassword;
    }

    function setSolicitantepassword($solicitantepassword) {
        $this->solicitantepassword = $solicitantepassword;
    }


}


?>