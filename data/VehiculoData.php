<?php

class VehiculoData extends Data{

    public function getAllVehiculo() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbvehiculo;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $Vehiculos = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentVehiculo = new Vehiculo($row['tbvehiculoid'], $row['tbvehiculomatricula'], $row['tbvehiculomodelo'], 
            $row['tbvehiculotipo'], $row['tbvehiculoestado'], $row['tbvehiculonivelaceite'], $row['tbvehiculokilometraje']);
            array_push($Vehiculos, $currentVehiculo);
        }
        return $Vehiculos;
    }
}






?>