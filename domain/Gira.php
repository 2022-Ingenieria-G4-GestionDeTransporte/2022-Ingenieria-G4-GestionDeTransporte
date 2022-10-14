<?php 
    
class Gira{
    
    private $giraId;
    private $giraNombreEncargado; 
    private $giraApellidoEncargado;
    private $giraCedulaEncargado;
    private $giraFechaSolicitud;
    private $giraNombreAcompanante;
    private $giraApellidoACompanante;
    private $giraCedulaAcompanante;
    private $giraFechaGira;
    private $giraCarrera;
    private $giraTipoGira;
    private $giraRequireChofer;
    private $giraObjetivo;
    private $giraIdChofer;

    function Gira($giraId, $giraNombreEncargado, $giraApellidoEncargado, $giraCedulaEncargado, $giraFechaSolicitud, $giraNombreAcompanante, $giraApellidoACompanante, $giraCedulaAcompanante, $giraFechaGira, $giraCarrera, $giraTipoGira, $giraRequireChofer, $giraObjetivo, $giraIdChofer){
        $this->giraId = $giraId;
        $this->giraNombreEncargado = $giraNombreEncargado;
        $this->giraApellidoEncargado = $giraApellidoEncargado;
        $this->giraCedulaEncargado = $giraCedulaEncargado;
        $this->giraFechaSolicitud = $giraFechaSolicitud;
        $this->giraNombreAcompanante = $giraNombreAcompanante;
        $this->giraApellidoACompanante = $giraApellidoACompanante;
        $this->giraCedulaAcompanante = $giraCedulaAcompanante;
        $this->giraFechaGira = $giraFechaGira;
        $this->giraCarrera = $giraCarrera;
        $this->giraTipoGira = $giraTipoGira;
        $this->giraRequireChofer = $giraRequireChofer;
        $this->giraObjetivo = $giraObjetivo;
        $this->giraIdChofer = $giraIdChofer;
    }
}