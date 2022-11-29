<?php 
    
class Gira{
    
    private $giraId;
    private $giraNombreEncargado; 
    private $giraCedulaEncargado;
    private $giraFechaSolicitud;
    private $giraNombreAcompanante;
    private $giraCedulaAcompanante;
    private $giraFechaGira;
	private $giraFechaGiraFin;
    private $giraCarrera;
	private $giraCurso;
	private $giraCursoNRC;
    private $giraTipoGira;
    private $giraRequireChofer;
    private $giraObjetivo;
    private $giraIdChofer;
	private $giraEstado;
	private $giraColor;
	private $giraArea;

    function Gira($giraId, $giraNombreEncargado, $giraCedulaEncargado, $giraFechaSolicitud, $giraNombreAcompanante, $giraCedulaAcompanante, $giraFechaGira, $giraFechaGiraFin, $giraCarrera, $giraCurso, $giraCursoNRC, $giraTipoGira, $giraRequireChofer, $giraObjetivo, $giraIdChofer, $giraEstado, $giraColor, $giraArea){
        $this->giraId = $giraId;
        $this->giraNombreEncargado = $giraNombreEncargado;
        $this->giraCedulaEncargado = $giraCedulaEncargado;
        $this->giraFechaSolicitud = $giraFechaSolicitud;
        $this->giraNombreAcompanante = $giraNombreAcompanante;
        $this->giraCedulaAcompanante = $giraCedulaAcompanante;
        $this->giraFechaGira = $giraFechaGira;
        $this->giraFechaGiraFin = $giraFechaGiraFin;
        $this->giraCarrera = $giraCarrera;
		$this->giraCurso = $giraCurso;
		$this->giraCursoNRC = $giraCursoNRC;
        $this->giraTipoGira = $giraTipoGira;
        $this->giraRequireChofer = $giraRequireChofer;
        $this->giraObjetivo = $giraObjetivo;
        $this->giraIdChofer = $giraIdChofer;
		$this->giraEstado = $giraEstado;
		$this->giraColor = $giraColor;
		$this->giraArea = $giraArea;
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

	function getGiraFechaFin() {
		return $this->giraFechaGiraFin;
	}
	
	function setGiraFechaFin($giraFechaGiraFin) {
		$this->giraFechaGiraFin = $giraFechaGiraFin;

	}
	
	function getGiraCarrera() {
		return $this->giraCarrera;
	}
	
	function setGiraCarrera($giraCarrera) {
		$this->giraCarrera = $giraCarrera;
	
	}

	function getGiraCurso() {
		return $this->giraCurso;
	}
	
	function setGiraCurso($giraCurso) {
		$this->giraCurso = $giraCurso;
	
	}

	function getGiraCursoNRC() {
		return $this->giraCursoNRC;
	}
	
	function setGiraCursoNRC($giraCursoNRC) {
		$this->giraCursoNRC = $giraCursoNRC;
	
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
	function getGiraEstado() {
		return $this->giraEstado;
	}
	
	function setGiraEstado($giraEstado) {
		$this->giraEstado = $giraEstado;
	}

	function getGiraColor() {
		return $this->giraColor;
	}
	
	function setGiraColor($giraColor) {
		$this->giraColor = $giraColor;
	}

	function getGiraArea() {
		return $this->giraArea;
	}
	
	function setGiraArea($giraArea) {
		$this->giraArea = $giraArea;
	}
}
