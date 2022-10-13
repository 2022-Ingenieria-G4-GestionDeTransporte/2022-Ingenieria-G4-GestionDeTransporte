<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>
    <?php
   // include '../business/FuncionarioBusiness.php';
    ?>
    <script src="../js/Function.js"></script>
    <link rel = "stylesheet" href="css/style.css" type = "text/css"></link>

</head>
<body> 
<header>
<h1>Listas</h1>      
<nav>  
<ul>  
<li>  
<a href="/2022-Ingenieria-G4-GestionDeTransporte/View/viewAdministrador/VisualizarGiras.php"> Giras </a>  
</li>  
<li>  
<a href="/2022-Ingenieria-G4-GestionDeTransporte/View/viewAdministrador/VisualizarSolicitantes.php"> Solicitantes </a>  
</li>  
<li>  
<a href="/2022-Ingenieria-G4-GestionDeTransporte/View/viewAdministrador/VisualizarChoferes.php"> Choferes </a>  
</li>  
<li> 
<a href="/2022-Ingenieria-G4-GestionDeTransporte/View/viewAdministrador/VisualizarVehiculos.php"> Vehiculos </a>  
</li>   
</ul>  
</nav>  
</header>

<h1>Lista de Giras</h1>
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
                <th>Dato1</th>
                <th>Dato2</th>
                <th>Dato3</th>
                <th>Eliminar</th>
                <th>Analizar Gira</th>
                <th>Estado de gira</th>
                <th></th>
            </tr>
            <?php
            //$GirasBusiness = new GirasBusiness();
            $allGiras = NULL; //= metodo lectura
            foreach ($allGiras as $current) {
                echo '<form method="post" enctype="multipart/form-data" action="../business/GiraAction.php">';
                echo '<input type="hidden" name="funcionario_id" value="' . $current->getDato1() . '">';
                echo '<td><input type="text" name="funcionario_nombre" id="funcionario_nombre" value="' . $current->getDato2() . '"/></td>';
                echo '<td><input type="text" name="funcionario_cedula" id="funcionario_cedula" value="' . $current->getDato3() . '"/></td>';
                echo '<td><input type="submit" value="Eliminar" name="delete" id="delete"/></td>';
                echo '<td><input type="submit" value="Analizar" name="analizar" id="analizar"/></td>';
                echo '<td><input type="submit" value="O" name="estado" id="estado"/></td>';
                //echo '<td><button onclick="deleteFuncionario('. $current->getFuncionarioId() .')">Eliminar</button></td>';
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

<<<<<<< HEAD
    <form action="/2022-Ingenieria-G4-GestionDeTransporte/View/viewAdministrador/PaginaPrincipal.php">
=======
<form action="/2022-Ingenieria-G4-GestionDeTransporte/View/index.php">
>>>>>>> 51d00f1122315f076a598b910ef81fd5a4a9b52f
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>

</body>
</html>
