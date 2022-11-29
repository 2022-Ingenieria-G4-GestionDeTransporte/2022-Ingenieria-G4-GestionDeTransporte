<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>
    </link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/Function.js"></script>
    <link rel = "stylesheet" href="../css/styleProyect.css" type = "text/css"></link>

    <?php
    include '../Business/GiraBusiness.php';
    //#302E71 #C30721
    ?>
</head>
<style>
  thead th {
  color: #fff;
}
</style>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark" style="background-color: #302E71" aria-label="Navegación principal" _mstaria-label="441961">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" _msthash="418717" _msttexthash="924456">Listas</a>
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="360672" _mstaria-label="320099">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbar" style="font-size: 1rem">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./GestionGirasView.php" _msthash="1070225" _msttexthash="177827">
              <ion-icon name="flag-outline"></ion-icon> Giras
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./GestionSolicitantesView.php" _msthash="1070407" _msttexthash="257478">
              <ion-icon name="hand-right-outline"></ion-icon> Solicitantes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./GestionChoferesView.php" _msthash="1070589" _msttexthash="76245">
              <ion-icon name="man-outline"></ion-icon> Choferes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./GestionVehiculosView.php" _msthash="1070771" _msttexthash="282880">
              <ion-icon name="car-outline"></ion-icon> Vehículos
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" _msthash="1070953" _msttexthash="262119">
              <ion-icon name="settings-outline"></ion-icon> Configuración
            </a>
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

<body class="" style="background-image: url(../Images/.webp); background-repeat: no-repeat; background-size: cover; background-position: center center;">
</br>
  <div style="background-color: #302E71">
    <img src="../Images/LOGO-UNA1-Blanco.png" alt="logo" style="float:right" width="129px">
    <h3 style="color: white">Sistema Gestión de Transportes</h3>
    <h5 style="color: white">Lista de Giras</h5>
    <br>
</div>
  </br></br>
  <center><div class="table-responsive card-body card mask-custom col-12 row justify-content-center container">
    <table class="table table-borderless text-white mb-0">
    <thead style="background-color: #302E71;">
      <tr>
        <th>Nombre de Encargado</th>
        <th>Fecha Solicitud</th>
        <th>Fecha de Gira</th>
        <th>Carrera</th>
        <th>Tipo de Gira</th>
        <th>Visualizar</th>
        <th>Eliminar</th>
        <th>Analizar</th>
        <th>Estado</th>
        <th></th>
      </tr>
    </thead>
    <tbody id=buscar>
      <?php
      $GiraBusiness = new GiraBusiness();
      $allGiras = $GiraBusiness->getAllGira();
      foreach ($allGiras as $current) {
        echo '<form method="post" enctype="multipart/form-data" action="../business/GiraAction.php">';
        echo '<input type="hidden" name="tbgiraid" value="' . $current->getGiraId() . '">';
        echo '<td><input type="text" readonly name="tbgiranombreencargado" id="tbgiranombreencargado" value="' . $current->getGiraNombreEncargado() . '"/></td>';
        echo '<td><input type="date" readonly name="tbgirafechasolicitud" id="tbgirafechasolicitud" value="' . $current->getGiraFechaSolicitud() . '"/></td>';
        echo '<td><input type="date" readonly name="tbgirafechagira" id="tbgirafechagira" value="' . $current->getGiraFechaGira() . '"/></td>';
        echo '<td><input type="text" readonly name="tbgiracarrera" id="tbgiracarrera" value="' . $current->getGiraCarrera() . '"/></td>';
        echo '<td><input type="text" readonly name="tbgiratipogira" size = "10px" id="tbgiratipogira" value="' . $current->getGiraTipoGira() . '"/></td>';
        echo '<td><center><input type="submit" class="material-symbols-outlined" value="visibility" name="show" id="show"/></center></td>';
        echo '<td><center><input type="submit" class="material-symbols-outlined" value="delete" name="delete" id="delete"/></center></td>';
        echo '<td><center><input type="submit" class="material-symbols-outlined" value="search" name="search" id="search"/></center></td>';
        if ($current->getGiraEstado() == "Aprobada") {
          $Estado = "Aprobada"; //Representar con colores
          echo '<td><input type="button" class="buttonAprobado" readonly value= "' . $Estado . '" name="estado" id="estado"/></td>';
        } else 
                if ($current->getGiraEstado() == "Denegada") {
          $Estado = "Denegada"; //Representar con colores
          echo '<td><input type="button" class="buttonDenegado" readonly value= "' . $Estado . '" name="estado" id="estado"/></td>';
        } else {
          $Estado = "Sin revisar";
          echo '<td><input type="button" class="buttonPendiente" readonly value= "' . $Estado . '" name="estado" id="estado"/></td>';
        }

        echo '</tr>';
        echo '</form>';
      }
      ?>
    </tbody>
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

  <form action="../View/VisualizarDatosGiraView.php">
    <form action="">
      <input type="submit" class="btn btn-dark btn-block" value="Ingresar una nueva gira" />
      <div id="contenedor"></div>
    </form>
  </form>
  </br>
  
  <a href="./PaginaPrincipalAdministradorView.php" style="color: #393f81;">Pagina Principal</a></p>

</body>

</html>