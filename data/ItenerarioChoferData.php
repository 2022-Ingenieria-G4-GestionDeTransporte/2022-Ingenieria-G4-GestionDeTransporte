<?php

include_once 'data.php';
include '../domain/ItenerarioChofer.php';

class ItenerarioChoferData extends Data{//data

    public function getAllItenerarioChofer() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbitenerariochofer;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $itenerario = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentItenerario = new ItenerarioChofer($row['tbitenerariochoferid'], $row['tbitenerariochoferlugar'], $row['tbitenerariochoferfechallegada'], 
            $row['tbitenerariochoferfechasalida'], $row['tbitenerariochoferobservaciones']);
            array_push($itenerario, $currentItenerario);
        }
        return $itenerario;
    }

}