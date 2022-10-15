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
	
	function getGiraId() {
		return $this->giraId;
	}
	
	function setGiraId($giraId){
		$this->giraId = $giraId;
	}
	
	function getGiraNombreEncargado() {
		return $this->giraNombreEncargado;
	}
	
	function setGiraNombreEncargado($giraNombreEncargado) {
		$this->giraNombreEncargado = $giraNombreEncargado;

	}

	function getGiraApellidoEncargado() {
		return $this->giraApellidoEncargado;
	}
	
	function setGiraApellidoEncargado($giraApellidoEncargado) {
		$this->giraApellidoEncargado = $giraApellidoEncargado;

	}

	function getGiraCedulaEncargado() {
		return $this->giraCedulaEncargado;
	}

	function setGiraCedulaEncargado($giraCedulaEncargado) {
		$this->giraCedulaEncargado = $giraCedulaEncargado;
	}
	
	function getGiraFechaSolicitud() {
		return $this->giraFechaSolicitud;
	}
	
	function setGiraFechaSolicitud($giraFechaSolicitud) {
		$this->giraFechaSolicitud = $giraFechaSolicitud;

	}

	function getGiraNombreAcompanante() {
		return $this->giraNombreAcompanante;
	}
	
	
	function setGiraNombreAcompanante($giraNombreAcompanante) {
		$this->giraNombreAcompanante = $giraNombreAcompanante;
	
	}

	function getGiraApellidoACompanante() {
		return $this->giraApellidoACompanante;
	}

	function setGiraApellidoACompanante($giraApellidoACompanante) {
		$this->giraApellidoACompanante = $giraApellidoACompanante;

	}
	
	function getGiraCedulaAcompanante() {
		return $this->giraCedulaAcompanante;
	}

	function setGiraCedulaAcompanante($giraCedulaAcompanante) {
		$this->giraCedulaAcompanante = $giraCedulaAcompanante;

	}
	
	function getGiraFechaGira() {
		return $this->giraFechaGira;
	}
	
	function setGiraFechaGira($giraFechaGira) {
		$this->giraFechaGira = $giraFechaGira;

	}
	
	function getGiraCarrera() {
		return $this->giraCarrera;
	}
	
	function setGiraCarrera($giraCarrera) {
		$this->giraCarrera = $giraCarrera;
	
	}
	
	function getGiraTipoGira() {
		return $this->giraTipoGira;
	}

	function setGiraTipoGira($giraTipoGira) {
		$this->giraTipoGira = $giraTipoGira;
		
	}

	function getGiraRequireChofer() {
		return $this->giraRequireChofer;
	}
	
	function setGiraRequireChofer($giraRequireChofer) {
		$this->giraRequireChofer = $giraRequireChofer;

	}
	
	function getGiraObjetivo() {
		return $this->giraObjetivo;
	}
	
	function setGiraObjetivo($giraObjetivo) {
		$this->giraObjetivo = $giraObjetivo;
		
	}
	
	function getGiraIdChofer() {
		return $this->giraIdChofer;
	}
	
	function setGiraIdChofer($giraIdChofer) {
		$this->giraIdChofer = $giraIdChofer;
	
	}
}