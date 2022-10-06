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
    //include '../business/FuncionarioBusiness.php';
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
        <h1>Lista de Solicitantes</h1>
        <br>
        <form method="post" enctype="multipart/form-data" action="../business/ChoferAction.php">
                <?php
                   echo '<td><input type="submit" value="<">';
                   echo '<td><input type="search" value="" name="buscar" id="buscar" placeholder = "Buscar"/></td></tr></br>';
                 ?>
                 </br>
        </form>
        </br>

        <table> <table border="1px">
            <tr>
                <th>Nombre Completo</th>
                <th>Cedula</th>
                <th>Correo</th>
                <th>Cargo</th>
                <th></th>
            </tr>
            <?php
            //$SolicitantesBusiness = new SolicitantesBusiness();
            $allSolicitantes = NULL; //= metodo lectura
            foreach ($allSolicitantes as $current) {
                echo '<form method="post" enctype="multipart/form-data" action="../business/FuncionarioAction.php">';
                echo '<input type="hidden" name="solicitante_id" value="' . $current->getSolicitanteId() . '">';
                echo '<td><input type="text" name="solicitante_nombre" id="solicitante_nombre" value="' . $current->getSolicitanteNombre() . '"/></td>';
                echo '<td><input type="text" name="solicitante_cedula" id="solicitante_cedula" value="' . $current->getSolicitanteCedula() . '"/></td>';
                echo '<td><input type="text" name="solicitante_correo" id="solicitante_correo" value="' . $current->getSolicitanteCorreo() . '"/></td>';
                echo '<td><input type="text" name="solicitante_cargo" id="solicitante_cargo" value="' . $current->getSolicitanteCargo() . '"/></td>';
                echo '<td><input type="submit" value="Actualizar" name="update" id="update"/></td>';
                echo '<td><button onclick="deleteSolicitante('. $current->getSolicitanteId() .')">Eliminar</button></td>';
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
        <form method="post" enctype="multipart/form-data" action="/Proyecto-Ingenieria-UNA/View/viewAdministrador/RegistroSolicitante.php">
                <tr>
                <?php
                   echo '<td><input type="submit" value="Registrar Funcionario" name="registro" id="registro"/></td></tr></br>';
                 ?>
                 </br>
        </form>
        </br>
    <form action="/Proyecto-Ingenieria-UNA/View/index.php">
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form> 
    </div>
</body>
</html>