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
    //include '../business/VehiculoBusiness.php';
    ?>
    <link rel = "stylesheet" href="css/style.css" type = "text/css"></link>
</head>
<body>
<header>
<h1>Listas</h1>      
<nav>  
<ul>  
<li>  
<a href="/Proyecto-Ingenieria-UNA/View/viewAdministrador/visualizarGiras.php"> Giras </a>  
</li>  
<li>  
<a href="/Proyecto-Ingenieria-UNA/View/viewAdministrador/visualizarSolicitantes.php"> Solicitantes </a>  
</li>  
<li>  
<a href="/Proyecto-Ingenieria-UNA/View/viewAdministrador/visualizarChoferes.php"> Choferes </a>  
</li>  
<li> 
<a href="/Proyecto-Ingenieria-UNA/View/viewAdministrador/visualizarVehiculos.php"> Vehiculos </a>  
</li>    
</ul>  
</nav>  
</header>
    <div id="fondo">
        <h1>Lista de Vehiculos</h1>
        <br>
        <form method="post" enctype="multipart/form-data" action="../business/ChoferAction.php">
                <?php
                   echo '<td><input type="submit" value="<">';
                   echo '<td><input type="search" value="" name="buscar" id="buscar" placeholder = "Buscar"/></td></tr></br>';
                 ?>
                 </br>
        </form>
        </br>

        <table border="1px">
            <tr>
                <th>Matricula</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th></th>
            </tr>
            <?php
            //$vehiculoBusiness = new VehiculoBusiness();
            $allVehiculos = NULL; //$VehiculoBusiness->getAllVehiculos();
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
                </br>
    </div>
    <form action="/paginaPrincipal">
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>
</body>
</html>