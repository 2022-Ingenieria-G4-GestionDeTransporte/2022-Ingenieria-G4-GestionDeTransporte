<!DOCTYPE html>
<head>
    <title>Vehiculos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../business/VehiculoBusiness.php';
    ?>
    <link rel = "stylesheet" href="../css/style.css" type = "text/css"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/Function.js"></script>
</head>

<body class="bg-light">
<nav class = "navbar navbar-expand-lg fixed-top navbar navbar-dark" style="background-color: #302E71" aria-label="Navegación principal" _mstaria-label="441961">
<div class="container-fluid">
    <a class="navbar-brand" href="#" _msthash="418717" _msttexthash="924456">Listas</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="360672" _mstaria-label="320099">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse offcanvas-collapse" id="navbar" style="font-size: 1rem">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarGiras.php" _msthash="1070225" _msttexthash="177827"><ion-icon name="flag-outline"></ion-icon>Giras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarSolicitantes.php" _msthash="1070407" _msttexthash="257478"><ion-icon name="hand-right-outline"></ion-icon>Solicitantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarChoferes.php" _msthash="1070589" _msttexthash="76245"><ion-icon name="man-outline"></ion-icon>Choferes</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarVehiculos.php" _msthash="1070771" _msttexthash="282880"><ion-icon name="car-outline"></ion-icon> Vehiculos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" _msthash="1070953" _msttexthash="262119"><ion-icon name="settings-outline"></ion-icon>Configuración</a>
          <ul class="dropdown-menu" _mstvisible="0">
            <li _mstvisible="1"><a class="dropdown-item" href="#" _msthash="1622712" _msttexthash="93353" _mstvisible="2">Acción</a></li>
            <li _mstvisible="1"><a class="dropdown-item" href="#" _msthash="1622894" _msttexthash="180622" _mstvisible="2">Otra acción</a></li>
            <li _mstvisible="1"><a class="dropdown-item" href="#" _msthash="1623076" _msttexthash="230152" _mstvisible="2">Algo más aquí</a></li>
          </ul>
        </li>
      </ul>
      
      <form class="d-flex" role="search">
        
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" _mstplaceholder="76154" _mstaria-label="76154">
        <button class="btn btn-outline-success" type="submit" _msthash="1202799" _msttexthash="76154">Buscar</button>
      </form>
    </div>
  </div>
</nav>
</body>

<body class = "" style="background-image: url(../Images/FondoU.webp); background-repeat: no-repeat; background-size: cover; background-position: center center;">
</br></br>        
<h2 class="display-4 text-light">Lista de Vehiculos</h1>

</br> </br>

        <table class = "table">
        <thead class="table-dark">
            <tr>
                <th>Matricula</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Modificar</th>
                <th>Eliminar</th>
                <th>Visualizar</th>
            </tr>
            </thead>
            <?php
            $VehiculoBusiness = new VehiculoBusiness();
            $allVehiculos = $VehiculoBusiness->getAllVehiculo();
            foreach ($allVehiculos as $current) {
                echo '<form method="post" enctype="multipart/form-data" action="../business/VehiculoAction.php">';
                echo '<input type="hidden" name="vehiculo_id" value="' . $current->getVehiculoId() . '">';
                echo '<td><input type="text" readonly name="vehiculo_matricula" id="vehiculo_matricula" value="' . $current->getVehiculoMatricula() . '"/></td>';
                echo '<td><input type="text" readonly name="vehiculo_tipo" id="vehiculo_tipo" value="' . $current->getVehiculoTipo() . '"/></td>';
                echo '<td><input type="text" readonly name="vehiculo_modelo" id="vehiculo_modelo" value="' . $current->getVehiculoModelo() . '"/></td>';
                echo '<td><input type="text" readonly name="vehiculo_estado" id="vehiculo_estado" value="' . $current->getVehiculoEstado() . '"/></td>';
                echo '<td><input type="submit" class="material-symbols-outlined" value="settings" name="update" id="update"/></td>';
                echo '<td><button class="material-symbols-outlined" onclick="deleteVehiculo('. $current->getVehiculoId() .')">delete</button></td>';
                echo '<td><input type="submit" class="material-symbols-outlined" value="visibility" name="view" id="view"/></td>';
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

    <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
    <li class="page-item disabled">
    <a class="page-link">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
    <a class="page-link" href="#">Siguiente</a>
    </li>
  </ul>
</nav>
        </br>
        <form method="post" enctype="multipart/form-data" action="../View/RegistrarVehiculo.php">
                <tr>
                <?php
                   echo '<td><input type="submit" class="btn btn-secondary" value="Registrar Vehiculo" name="registro" id="registro"/></td></tr></br>';
                 ?>
                 </br>
        </form>
                </br>
    
    <form action="/2022-Ingenieria-G4-GestionDeTransporte/View/PaginaPrincipal.php">
        <input type="submit" class="btn btn-secondary" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>
</body>
</html>