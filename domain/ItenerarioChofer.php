<?php

class ItenerarioChofer{

    private $itenerariochoferid;
    private $itenerariochoferlugar;
    private $itenerariochoferfechallegada;
    private $itenerariochoferfechasalida;
    private $itenerariochoferobservaciones;

    public function ItenerarioChofer($itenerariochoferid, $itenerariochoferlugar, $itenerariochoferfechallegada, $itenerariochoferfechasalida, $itenerariochoferobservaciones){
        $this->itenerariochoferid = $itenerariochoferid;
        $this->itenerariochoferlugar = $itenerariochoferlugar;
        $this->itenerariochoferfechallegada = $itenerariochoferfechallegada;
        $this->itenerariochoferfechasalida = $itenerariochoferfechasalida;
        $this->itenerariochoferobservaciones = $itenerariochoferobservaciones;
    }


	public function setItenerariochoferid($itenerariochoferid) {
		$this->itenerariochoferid = $itenerariochoferid;
	}


	public function getItenerariochoferid() {
		return $this->itenerariochoferid;
	}


	public function getItenerariochoferlugar() {
		return $this->itenerariochoferlugar;
	}


	public function setItenerariochoferlugar($itenerariochoferlugar){
		$this->itenerariochoferlugar = $itenerariochoferlugar;
	}

	public function getItenerariochoferfechallegada() {
		return $this->itenerariochoferfechallegada;
	}

	public function setItenerariochoferfechallegada($itenerariochoferfechallegada) {
		$this->itenerariochoferfechallegada = $itenerariochoferfechallegada;
		
	}

	public function getItenerariochoferfechasalida() {
		return $this->itenerariochoferfechasalida;
	}

	public function setItenerariochoferfechasalida($itenerariochoferfechasalida) {
		$this->itenerariochoferfechasalida = $itenerariochoferfechasalida;
		
	}


	public function getItenerariochoferobservaciones() {
		return $this->itenerariochoferobservaciones;
	}

	//set
	public function setItenerariochoferobservaciones($itenerariochoferobservaciones) {
		$this->itenerariochoferobservaciones = $itenerariochoferobservaciones;
	
	}
}