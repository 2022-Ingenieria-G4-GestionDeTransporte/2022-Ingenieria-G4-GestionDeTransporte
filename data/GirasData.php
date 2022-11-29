<?php
include_once 'data.php';
include '../domain/Gira.php';

class GirasData extends Data {

    public function getAllGira() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbgira;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $Giras = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentGira = new Gira($row['tbgiraid'], $row['tbgiranombreencargado'], $row['tbgiraapellidoencargado'], 
            $row['tbgiracedulaencargado'], $row['tbgirafechasolicitud'], $row['tbgiranombreacompanante'], $row['tbgiraapellidoacompanante']
            , $row['tbgiracedulaacompanante'], $row['tbgirafechagira'], $row['tbgirafechafin'], $row['tbgiracarrera'], $row['tbgiratipogira']
            , $row['tbgirarequierechofer'], $row['tbgiraobjetivo'], $row['tbgiraidchofer'], $row['tbgiraestado']);
            array_push($Giras, $currentGira);
        }
        return $Giras;
    }

    public function getAllGiraAprobadas() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbgira where tbgiraestado = 'Aprobada';";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $Giras = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentGira = new Gira($row['tbgiraid'], $row['tbgiranombreencargado'], $row['tbgiraapellidoencargado'], 
            $row['tbgiracedulaencargado'], $row['tbgirafechasolicitud'], $row['tbgiranombreacompanante'], $row['tbgiraapellidoacompanante']
            , $row['tbgiracedulaacompanante'], $row['tbgirafechagira'], $row['tbgirafechafin'], $row['tbgiracarrera'], $row['tbgiratipogira']
            , $row['tbgirarequierechofer'], $row['tbgiraobjetivo'], $row['tbgiraidchofer'], $row['tbgiraestado']);
            array_push($Giras, $currentGira);
        }
        return $Giras;
    }

}
