<?php
include_once 'data.php';
include '../domain/Solicitante.php';

class SolcitantesData extends Data{

    public function getAllSolicitantes() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbsolicitante;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $Solicitantes = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentSolicitante = new Solicitante($row['tbsolicitanteid'], $row['tbsolicitantecedula'], $row['tbsolicitantenombre'], 
            $row['tbsolicitanteapellidos'], $row['tbsolicitantecorreo'], $row['tbsolicitantecargo'], $row['tbsolicitantelicenciavigente']
            , $row['tbsolicitantefechavencimientolicencia'], $row['tbsolicitantepassword']);
            array_push($Solicitantes, $currentSolicitante);
        }
        return $Solicitantes;
    }
}






?>