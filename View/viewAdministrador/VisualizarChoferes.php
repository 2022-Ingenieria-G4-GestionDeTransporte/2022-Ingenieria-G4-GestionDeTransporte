<!DOCTYPE html>
<?php
error_reporting(0);
?>
<head>
    <script src="../js/Function.js"></script>
    <title>Choferes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../business/ChoferBusiness.php';
    ?>
</head>
<body>
    <div id="fondo">
        <h1>Lista de Choferes</h1>
        <br>
        <form method="post" enctype="multipart/form-data" action="../business/ChoferAction.php">
                <?php
                   echo '<td><input type="search" value="" name="buscar" id="buscar" paceholder = "Buscar"/></td></tr></br>';
                 ?>
                 </br>
        </form>
        </br>

        <table>
            <tr>
                <th>Nombre Completo</th>
                <th>Cedula</th>
                <th>Licencia Vigente</th>
                <th></th>
            </tr>
            <?php
            $ChoferBusiness = new ChoferBusiness();
            $allChoferes = $ChoferBusiness->getAllChoferes();
            foreach ($allChoferes as $current) {
                echo '<form method="post" enctype="multipart/form-data" action="../business/ChoferAction.php">';
                echo '<input type="hidden" name="chofer_id" value="' . $current->getChoferId() . '">';
                echo '<td><input type="text" name="chofer_nombre" id="chofer_nombre" value="' . $current->getChoferNombre() . '"/></td>';
                echo '<td><input type="text" name="chofer_cedula" id="chofer_cedula" value="' . $current->getChoferCedula() . '"/></td>';
                echo '<td><input type="text" name="chofer_licencia_vigente" id="chofer_licencia_vigente" value="' . $current->getChoferLicenciaVigente() . '"/></td>';
                echo '<td><input type="submit" value="Actualizar" name="update" id="update"/></td>';
                echo '<td><button onclick="deleteChofer('. $current->getChoferId() .')">Eliminar</button></td>';
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

        <form method="post" enctype="multipart/form-data" action="../View/RegistrarChofer.php">
                <tr>
                <?php
                   echo '<td><input type="submit" value="Registrar Chofer" name="registro" id="registro"/></td></tr></br>';
                 ?>
                 </br>
        </form>

        </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

    </div>
</body>
</html>