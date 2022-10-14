<?php

class Curso{

    private $cursoNRC;
    private $cursoNombre;

    function Curso($cursoNRC, $cursoNombre){
        $this->cursoNRC = $cursoNRC;
        $this->cursoNombre = $cursoNombre;
    }

    
    function getcursoNRC() {
        return $this->cursoNRC;
    }

    function setcursoNRC($cursoNRC) {
        $this->cursoNRC = $cursoNRC;
    }

    function getcursoNombre() {
        return $this->cursoNombre;
    }

    function setcursoNombre($cursoNombre) {
        $this->cursoNombre = $cursoNombre;
    }
}



?>