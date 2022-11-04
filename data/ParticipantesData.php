<?php
include_once 'data.php';
include '../domain/Participante.php';

class ParticipantesData extends Data {

    public function getAllParticipantes() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbparticipante;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $Participantes = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentParticipante = new Participante($row['tbparticipanteid'], $row['tbparticipantecedula'], $row['tbparticipantenombre'], 
            $row['tbparticipanteapellidos'], $row['tbparticipantecarrera'], $row['tbparticipanteinstitucion'], $row['tbparticipanteidgira']);
            array_push($Participantes, $currentParticipante);
        }
        return $Participantes;
    }

}