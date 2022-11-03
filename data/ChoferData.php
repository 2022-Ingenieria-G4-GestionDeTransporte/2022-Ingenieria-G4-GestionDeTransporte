<?php
include_once 'data.php';
include '../domain/Chofer.php';

class ChoferData extends Data{

    public function getAllChofer() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbchofer;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $Choferes = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentChofer = new Chofer($row['tbchoferid'], $row['tbchofercedula'], $row['tbchofernombre'], $row['tbchoferlicenciavigente'], $row['tbchoferfechavencimientolicencia'], 
            $row['tbchoferpassword']);
            array_push($Choferes, $currentChofer);
        }
        return $Choferes;
    }
}






?>