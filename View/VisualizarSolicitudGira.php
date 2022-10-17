<!DOCTYPE html>
<?php
error_reporting(0);
?>
<head>
    <script src="../js/Function.js"></script>
    <title>Visualizar Gira</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../business/GirasBusiness.php';
    ?>
</head>
<body>
    <div id="fondo">
        <h1>Solicitud de Gira</h1>

        <table class="separado" border="1px">
            <tr>
                <th>Destino</th>
                <th>Fecha</th>
                <th>Vehiculo</th>
                <th>Estado</th>
                <label>Name</label></br>
                <input type="submit" value=" " !" />
                <input type="text" name="cargo" readonly />
            </tr>
            <tr th:each="temp:${lista}">
                <td th:text="${temp.destino}"></td>
                <td th:text="${temp.fecha}"></td>
                <td th:text="${temp.vehiculo}"></td>
                <td th:text="${temp.estado}"></td>
            </tr>
        </table>


        <table>
            <tr>
                <th>Destino</th>
                <th>Fecha</th>
                <th>Vehiculo</th>
                <th>Estado</th>
                <label>Name</label></br>
                <input type="submit" value=" "/>
                <input type="text" name="cargo" readonly />
                <th></th>
            </tr>
            <?php
            $GirasBusiness;
            $allGiras = $GirasBusiness->getGiras();
            foreach ($allGiras as $current) {
                echo '<td><input type="text" name="gira_destino" id="gira_destino" value="' . $current->getGiraDestino() . '"/></td>';
                echo '<td><input type="text" name="gira_fecha" id="gira_fecha" value="' . $current->getGiraFecha() . '"/></td>';
                echo '<td><input type="text" name="gira_vehiculo" id="gira_vehiculo" value="' . $current->getGiraVehiculo() . '"/></td>';
                echo '<td><input type="text" name="gira_estado" id="gira_estado" value="' . $current->getGiraVehiculo() . '"/></td>';
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


        </br>
        <?php
        echo 'Resultado: <input type="text" name="cargo" value="' . $current->getGiraResultado() . '" readonly /></br>';
        echo 'Observaciones: <input type="text" name="cargo" value="' . $current->getGiraObservaciones() . '" readonly /></br>';
        ?>
        <form method="post" enctype="multipart/form-data" action="../View/PaginaPrincipalFuncionario.php">
                <tr>
                <?php
                   echo '<td><input type="submit" value="Regresar" name="home" id="home"/></td></tr></br>';
                 ?>
                 </br>
        </form>
        </br>

    </div>
</body>
</html>