<?php

class ItinerarioGira{

    private $itinerarioGiraId;
    private $itinerarioGiraFecha; 
    private $itinerarioGiraActividad;
    private $itinerarioGiraHoraInicio;
    private $itinerarioGiraHoraFinalizacion; 


    function ItinerarioGira($itinerarioGiraId, $itinerarioGiraFecha,$itinerarioGiraActividad, $itinerarioGiraHoraInicio,
    $itinerarioGiraHoraFinalizacion){
        $this->itinerarioGiraId = $itinerarioGiraId;
        $this->itinerarioGiraFecha = $itinerarioGiraFecha;
        $this->itinerarioGiraActividad = $itinerarioGiraActividad;
        $this->itinerarioGiraHoraInicio = $itinerarioGiraHoraInicio;
        $this->itinerarioGiraHoraFinalizacion = $itinerarioGiraHoraFinalizacion;
    }

    
    function getItinerarioGiraId() {
        return $this->itinerarioGiraId;
    }

    function setItinerarioGiraId($itinerarioGiraId) {
        $this->itinerarioGiraId = $itinerarioGiraId;
    }

    function getItinerarioGiraFecha() {
        return $this->itinerarioGiraFecha;
    }

    function setItinerarioGiraFecha($itinerarioGiraFecha) {
        $this->itinerarioGiraFecha = $itinerarioGiraFecha;
    }

    function getItinerarioGiraActividad() {
        return $this->itinerarioGiraActividad;
    }

    function setItinerarioGiraActividad($itinerarioGiraActividad) {
        $this->itinerarioGiraActividad = $itinerarioGiraActividad;
    }

    function getItinerarioGiraHoraInicio() {
        return $this->itinerarioGiraHoraInicio;
    }

    function setItinerarioGiraHoraInicio($itinerarioGiraHoraInicio) {
        $this->itinerarioGiraHoraInicio = $itinerarioGiraHoraInicio;
    }

    function getItinerarioGiraHoraFinalizacion() {
        return $this->itinerarioGiraHoraFinalizacion;
    }

    function setItinerarioGiraHoraFinalizacion($itinerarioGiraHoraFinalizacion) {
        $this->itinerarioGiraHoraFinalizacion = $itinerarioGiraHoraFinalizacion;
    }


    
}


