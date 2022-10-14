<?php

class CursosGira{

    private $cursosGiraId;
    private $giraId;
    private $cursoNRC;

    function CursosGiras($cursosGiraId, $giraId, $cursoNRC){
        $this->cursosGiraId = $cursosGiraId;
        $this->giraId = $giraId;
        $this->cursoNRC = $cursoNRC;
    }

    function getGiraId() {
		return $this->giraId;
	}
	
	function setGiraId($giraId){
		$this->giraId = $giraId;
	}
	
	function getCursosGiraId() {
		return $this->cursosGiraId;
	}
	
	function setCursosGiraId($cursosGiraId) {
		$this->cursosGiraId = $cursosGiraId;

	}

	function getCursoNRC() {
		return $this->cursoNRC;
	}
	
	function setCursoNRC($cursoNRC) {
		$this->cursoNRC = $cursoNRC;

	}
}


?>