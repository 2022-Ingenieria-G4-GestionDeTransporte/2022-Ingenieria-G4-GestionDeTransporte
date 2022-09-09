<!DOCTYPE html>
<?php
error_reporting(0);
?>
<head>
    <script src="../js/Function.js"></script>
    <title>Funcionarios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../business/FuncionarioBusiness.php';
    ?>
</head>
<body>
    <div id="fondo">
        <h1>Lista de Funcionarios</h1>
        <br>
        <form method="post" enctype="multipart/form-data" action="../business/FuncionarioAction.php">
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
                <th>Correo</th>
                <th>Cargo</th>
                <th></th>
            </tr>
            <?php
            $FuncionarioBusiness = new FuncionarioBusiness();
            $allFuncionarios = $FuncionarioBusiness->getAllFuncionarios();
            foreach ($allChoferes as $current) {
                echo '<form method="post" enctype="multipart/form-data" action="../business/FuncionarioAction.php">';
                echo '<input type="hidden" name="funcionario_id" value="' . $current->getFuncionarioId() . '">';
                echo '<td><input type="text" name="funcionario_nombre" id="funcionario_nombre" value="' . $current->getFuncionarioNombre() . '"/></td>';
                echo '<td><input type="text" name="funcionario_cedula" id="funcionario_cedula" value="' . $current->getFuncionarioCedula() . '"/></td>';
                echo '<td><input type="text" name="funcionario_correo" id="funcionario_correo" value="' . $current->getChoferCorreo() . '"/></td>';
                echo '<td><input type="text" name="funcionario_cargo" id="funcionario_cargo" value="' . $current->getChoferCargo() . '"/></td>';
                echo '<td><input type="submit" value="Actualizar" name="update" id="update"/></td>';
                echo '<td><button onclick="deleteFuncionario('. $current->getFuncionarioId() .')">Eliminar</button></td>';
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
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">&raquo;</a>
        </div>
        </br>
        <form method="post" enctype="multipart/form-data" action="../View/RegistrarFuncionario.php">
                <tr>
                <?php
                   echo '<td><input type="submit" value="Registrar Funcionario" name="registro" id="registro"/></td></tr></br>';
                 ?>
                 </br>
        </form>
        </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

    </div>
</body>
</html>