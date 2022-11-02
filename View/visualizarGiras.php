<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas</title>
    </link>
    <link rel = "stylesheet" href="../css/style.css" type = "text/css"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <?php
    include '../Business/GiraBusiness.php';
    //#302E71 #E50B2C
    ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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
          <a class="nav-link active" aria-current="page" href="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarGiras.php" _msthash="1070225" _msttexthash="177827"><ion-icon name="flag-outline"></ion-icon>Giras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarSolicitantes.php" _msthash="1070407" _msttexthash="257478"><ion-icon name="hand-right-outline"></ion-icon>Solicitantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarChoferes.php" _msthash="1070589" _msttexthash="76245"><ion-icon name="man-outline"></ion-icon>Choferes</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarVehiculos.php" _msthash="1070771" _msttexthash="282880"><ion-icon name="car-outline"></ion-icon> Vehiculos</a>
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

<body class = "" style="background-image: url(../Images/Fondo.webp); background-repeat: no-repeat; background-size: cover; background-position: center center;">
</br></br>
    <h1>Lista de Giras</h1>

    </form>
    </br>
    <table class="table">
     <thead class="table-dark">
        <tr>
            <th>Nombre de Encargado</th>
            <th>Fecha Solicitud</th>
            <th>Fecha de Gira</th>
            <th>Carrera</th>
            <th>Tipo de Gira</th>
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
                echo '<td><input type="text" name="tbgiranombreencargado" id="tbgiranombreencargado" value="' . $current->getGiraNombreEncargado() . '"/></td>';
                echo '<td><input type="date" name="tbgirafechasolicitud" id="tbgirafechasolicitud" value="' . $current->getGiraFechaSolicitud() . '"/></td>';
                echo '<td><input type="date" name="tbgirafechagira" id="tbgirafechagira" value="' . $current->getGiraFechaGira() . '"/></td>';
                echo '<td><input type="text" name="tbgiracarrera" id="tbgiracarrera" value="' . $current->getGiraCarrera() . '"/></td>';
                echo '<td><input type="text" name="tbgiratipogira" id="tbgiratipogira" value="' . $current->getGiraTipoGira() . '"/></td>';
                echo '<td><input type="submit" value="Eliminar" name="delete" id="delete"/></td>';
                echo '<td><input type="submit" value="Visualizar" name="view" id="view"/></td>';
                if($current->getGiraEstado() != ""){
                $Estado = $current->getGiraEstado();
                }else{
                $Estado = "Sin revisar"; //Representar con colores
                }
                echo '<td><input type="submit" value= "'. $Estado .'" name="estado" id="estado"/></td>';
                echo '</form>';
            }
            ?>
        </tbody>
    </table>
<form action="/2022-Ingenieria-G4-GestionDeTransporte/View/PaginaPrincipal.php">

    <form action="">
            <input type="submit" value="Ingresar una nueva gira" />
            <div id="contenedor"></div>
        </form>
    </form>
    </br>
    <form action="/2022-Ingenieria-G4-GestionDeTransporte/View/PaginaPrincipal.php">

        <form action="/2022-Ingenieria-G4-GestionDeTransporte/View/PaginaPrincipal.php">
            <input type="submit" value="Pagina Principal" />
            <div id="contenedor"></div>
        </form>
    </form>

</body>
</html>