<?php

class Vehiculo{

    private $vehiculoId;
    private $vehiculoMatricula;
    private $vehiculoMarca;
    private $vehiculoModelo;
    private $vehiculoTipo;
    private $vehiculoEstado;
    private $vehiculoNivelAceite;
    private $vehiculoKilometraje;

    function Vehiculo($vehiculoId, $vehiculoMatricula, $vehiculoMarca, $vehiculoModelo, $vehiculoTipo, $vehiculoEstado, $vehiculoNivelAceite, $vehiculoKilometraje){
        $this->vehiculoId = $vehiculoId;
        $this->vehiculoMatricula = $vehiculoMatricula;
        $this->vehiculoModelo = $vehiculoModelo;
        $this->vehiculoTipo = $vehiculoTipo;
        $this->vehiculoEstado = $vehiculoEstado;
        $this->vehiculoNivelAceite = $vehiculoNivelAceite;
        $this->vehiculoKilometraje = $vehiculoKilometraje;
        $this->vehiculoMarca = $vehiculoMarca;
    }

    function getVehiculoId() {
        return $this->vehiculoId;
    }

    function setVehiculoId($vehiculoId) {
        $this->vehiculoId = $vehiculoId;
    }

    function getVehiculoMatricula() {
        return $this->vehiculoMatricula;
    }

    function setVehiculoMatricula($vehiculoMatricula) {
        $this->vehiculoMatricula = $vehiculoMatricula;
    }

    function getVehiculoMarca() {
        return $this->vehiculoMarca;
    }

    function setVehiculoMarca($vehiculoMarca) {
        $this->vehiculoMarca = $vehiculoMarca;
    }

    function getVehiculoModelo() {
        return $this->vehiculoModelo;
    }

    function setVehiculoModelo($vehiculoModelo) {
        $this->vehiculoModelo = $vehiculoModelo;
    }

    function getVehiculoTipo() {
        return $this->vehiculoTipo;
    }

    function setVehiculoTipo($vehiculoTipo) {
        $this->vehiculoTipo = $vehiculoTipo;
    }

    function getVehiculoEstado() {
        return $this->vehiculoEstado;
    }

    function setVehiculoEstado($vehiculoEstado) {
        $this->vehiculoEstado = $vehiculoEstado;
    }

    function getVehiculoNivelAceite() {
        return $this->vehiculoNivelAceite;
    }

    function setVehiculoNivelAceite($vehiculoNivelAceite) {
        $this->vehiculoNivelAceite = $vehiculoNivelAceite;
    }

    function getVehiculoKilometraje() {
        return $this->vehiculoKilometraje;
    }

    function setVehiculoKilometraje($vehiculoKilometraje) {
        $this->vehiculoKilometraje = $vehiculoKilometraje;
    }


}