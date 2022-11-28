<!DOCTYPE html>
<head>
    <script src="../js/Function.js"></script>
    <title>Funcionarios</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../Business/SolicitanteBusiness.php';
    ?>
    </link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/Function.js"></script>
    <link rel = "stylesheet" href="../css/styleProyect.css" type = "text/css"></link>

</head>
<style>
  thead th {
  color: #fff;
}
</style>
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
          <a class="nav-link" href="./GestionGirasView.php" _msthash="1070225" _msttexthash="177827"><ion-icon name="flag-outline"></ion-icon>Giras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./GestionSolicitantesView.php" _msthash="1070407" _msttexthash="257478"><ion-icon name="hand-right-outline"></ion-icon>Solicitantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="./GestionChoferesView.php" _msthash="1070589" _msttexthash="76245"><ion-icon name="man-outline"></ion-icon>Choferes</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="./GestionVehiculosView.php" _msthash="1070771" _msttexthash="282880"><ion-icon name="car-outline"></ion-icon> Vehículos</a>
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


<body class = "" style="background-image: url(../Images/.webp); background-repeat: no-repeat; background-size: cover; background-position: center center;">
</br>
  <div style="background-color: #302E71">
  <img src="../Images/LOGO-UNA1-Blanco.png" alt="logo" style="float:right" width="129px">
    <h3 style="color: white">Sistema Gestión de Transportes</h3>
    <h5 style="color: white">Lista de Solicitantes</h5>
    <br>
</div>
</br></br>

<center><div class="table-responsive card-body card mask-custom col-12 row justify-content-center container">
        <table class="table table-borderless text-white mb-0">
        <thead style="background-color: #302E71;">
            <tr>
                <th>Nombre Completo</th>
                <th>Cédula</th>
                <th>Correo</th>
                <th>Cargo</th>
                <th>Eliminar</th>
                <th>Visualizar</th>
                <th></th>
            </tr>
            </thead>
            <?php
            $SolicitantesBusiness = new SolicitanteBusiness();
            $allSolicitantes = $SolicitantesBusiness->getAllSolicitantes(); 
            foreach ($allSolicitantes as $current) {
                echo '<form method="post" enctype="multipart/form-data" action="../business/SolicitanteAction.php">';
                echo '<input type="hidden" name="solicitante_id" value="' . $current->getSolicitanteId() . '">';
                echo '<td><input type="text" readonly name="solicitante_nombre" id="solicitante_nombre" value="' . $current->getSolicitanteNombre() . ' '. $current->getSolicitanteApellidos() .'"/></td>';
                echo '<td><input type="text" readonly name="solicitante_cedula" id="solicitante_cedula" value="' . $current->getSolicitanteCedula() . '"/></td>';
                echo '<td><input type="text" readonly name="solicitante_correo" id="solicitante_correo" value="' . $current->getSolicitanteCorreo() . '"/></td>';
                echo '<td><input type="text" readonly name="solicitante_cargo" id="solicitante_cargo" value="' . $current->getSolicitanteCargo() . '"/></td>';
                echo '<td><button class="material-symbols-outlined" onclick="deleteSolicitante('. $current->getSolicitanteId() .')">delete</button></td>';
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
      </div></center>

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
        <form method="post" enctype="multipart/form-data" action="./RegistroSolicitanteView.php">
                <tr>
                <?php
                   echo '<td><input type="submit" class="btn btn-dark btn-block" value="Registrar Solicitante" name="registro" id="registro"/></td></tr></br>';
                 ?>
                 </br>
        </form>

        <a href="./PaginaPrincipalAdministradorView.php" style="color: #393f81;">Página Principal</a></p>

</body>
</html>