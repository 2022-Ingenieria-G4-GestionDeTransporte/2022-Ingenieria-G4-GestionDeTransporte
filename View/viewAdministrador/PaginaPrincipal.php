<!DOCTYPE html>
<?php
error_reporting(0);
?>
<head>
    <script src="../js/Function.js"></script>
    <title>Calendario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../business/GirasBusiness.php';
    ?>
</head>
<body>
    <div id="fondo">
        <h1>Calendario</h1>
        <ul>
            <li><a href="#">Informacion Personal</a></li>
            <li><a href="#">Modificar Datos Administrativos</a></li>
        </ul>
        <br>
        <select name="meses" id="meses">
            <option value="enero">Enero</option>
            <option value="febrero">Febrero</option>
            <option value="marzo">Marzo</option>
            <option value="abril">Abril</option>
            <option value="mayo">Mayo</option>
            <option value="junio">Junio</option>
            <option value="julio">Julio</option>
            <option value="agosto">Agosto</option>
            <option value="setiembre">Setiembre</option>
            <option value="octubre">Octubre</option>
            <option value="noviembre">Noviembre</option>
            <option value="diciembre">Diciembre</option>
        </select>
        </br>

        <table>
            <?php
            $GirasBusiness;
            $allGiras = $GirasBusiness->getAllGiras();
            foreach ($allGiras as $current) {
                echo '<tr>';
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
 
        <form method="post" enctype="multipart/form-data" action="../View/VisualizarListaGiras.php">
                <?php
                   echo '<td><input type="submit" value="Lista de Giras" name="giras" id="giras"/></td></tr></br>';
                 ?>
        </form>

        <form method="post" enctype="multipart/form-data" action="../View/VisualizarFuncionarios.php">
                <?php
                   echo '<td><input type="submit" value="Lista de Funcionarios" name="funcionarios" id="funcionarios"/></td></tr></br>';
                 ?>
        </form>

        <form method="post" enctype="multipart/form-data" action="../View/VisualizarVehiculos.php">
                <?php
                   echo '<td><input type="submit" value="Lista de Vehiculos" name="vehiculos" id="vehiculos"/></td></tr></br>';
                 ?>
        </form>

        <form method="post" enctype="multipart/form-data" action="../View/VerReportes.php">
                <?php
                   echo '<td><input type="submit" value="Reportes" name="reportes" id="reportes"/></td></tr></br>';
                 ?>
        </form>
        </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

    </div>
</body>
</html>