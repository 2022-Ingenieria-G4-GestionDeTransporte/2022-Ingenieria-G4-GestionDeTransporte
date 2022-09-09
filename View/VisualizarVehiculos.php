<!DOCTYPE html>
<?php
error_reporting(0);
?>
<head>
    <script src="../js/Function.js"></script>
    <title>Vehiculos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../business/VehiculoBusiness.php';
    ?>
</head>
<body>
    <div id="fondo">
        <h1>Lista de Vehiculos</h1>
        <br>
        <form method="post" enctype="multipart/form-data" action="../business/FuncionarioAction.php">
                <?php
                   echo '<td><input type="search" value="" name="buscar" id="buscar" paceholder = "Buscar"/></td></tr></br>';
                 ?>
        </form>
        </br>

        <table>
            <tr>
                <th>Matricula</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th></th>
            </tr>
            <?php
            $vehiculoBusiness = new VehiculoBusiness();
            $allVehiculos = $VehiculoBusiness->getAllVehiculos();
            foreach ($allvehiculos as $current) {
                echo '<form method="post" enctype="multipart/form-data" action="../business/VehiculoAction.php">';
                echo '<input type="hidden" name="vehiculo_id" value="' . $current->getVehiculoId() . '">';
                echo '<td><input type="text" name="vehiculo_matricula" id="vehiculo_matricula" value="' . $current->getVehiculoMatricula() . '"/></td>';
                echo '<td><input type="text" name="vehiculo_tipo" id="vehiculo_tipo" value="' . $current->getVehiculoTipo() . '"/></td>';
                echo '<td><input type="text" name="vehiculo_modelo" id="vehiculo_modelo" value="' . $current->getVehiculoModelo() . '"/></td>';
                echo '<td><input type="text" name="vehiculo_estado" id="vehiculo_estado" value="' . $current->getVehiculoEstado() . '"/></td>';
                echo '<td><input type="submit" value="Actualizar" name="update" id="update"/></td>';
                echo '<td><button onclick="deleteVehiculo('. $current->getVehiculoId() .')">Eliminar</button></td>';
                echo '</tr>';
                echo '</form>';
            }
            ?>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyField") {
                            echo '<p style="color: red">Campo(s) vacio(s)</p>';
                        } else if ($_GET['error'] == "numberFormat") {
                            echo '<p style="color: red">Error, formato de numero</p>';
                        } else if ($_GET['error'] == "dbError") {
                            echo '<center><p style="color: red">Error al procesar la transacción</p></center>';
                        }
                    } else if (isset($_GET['success'])) {
                        echo '<p style="color: green">Transacción realizada</p>';
                    }
                    ?>
                </td>
            </tr>
        </table>



        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">&raquo;</a>
        </div>
        </br>
        <form method="post" enctype="multipart/form-data" action="../View/RegistrarVehiculo.php">
                <tr>
                <?php
                   echo '<td><input type="submit" value="Registrar Vehiculo" name="registro" id="registro"/></td></tr></br>';
                 ?>
                 </br>
        </form>
        </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

    </div>
</body>
</html>