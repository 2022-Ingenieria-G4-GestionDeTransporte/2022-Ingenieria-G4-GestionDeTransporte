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

    
    function getdestinoGiraId() {
        return $this->destinoGiraId;
    }

    function setdestinoGiraId($destinoGiraId) {
        $this->destinoGiraId = $destinoGiraId;
    }

    function getcursoNombre() {
        return $this->cursoNombre;
    }

    function setcursoNombre($cursoNombre) {
        $this->cursoNombre = $cursoNombre;
    }
}



?>