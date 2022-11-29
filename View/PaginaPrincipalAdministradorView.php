<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
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
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
</head>
<style>
  thead th {
  color: #fff;
}
</style>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark" style="background-color: #302E71" aria-label="Navegación principal" _mstaria-label="441961">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" _msthash="418717" _msttexthash="924456">Secciones</a>
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="360672" _mstaria-label="320099">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbar" style="font-size: 1rem">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./ActualizarAdministradorView.php" _msthash="1070225" _msttexthash="177827">
            <ion-icon name="person-outline"></ion-icon> Información Personal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./GestionGirasView.php" _msthash="1070407" _msttexthash="257478">
            <ion-icon name="list-circle-outline"></ion-icon> Visualizar Listas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./VisualizarReportesView.php" _msthash="1070589" _msttexthash="76245">
            <ion-icon name="eye-outline"></ion-icon> Ver Reportes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Login.php" _msthash="1070771" _msttexthash="282880">
            <ion-icon name="log-out-outline"></ion-icon> Cerrar Sesión
            </a>
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
    <h5 style="color: white">Calendario</h5>
    <br>
  </div> 
  <script>
      document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: "es",
      headerToolbar:{
      left:'prev,next today',
      center:'title',
      right:'dayGridMonth,timeGridWeek,timeGridDay'
      },
      selectable: true,
      events: [
        <?php
      $GiraBusiness = new GiraBusiness();
      $giras = $GiraBusiness->getAllGira();
      foreach ($giras as $current) { ?>
      {
        _id: '<?php echo $current->getGiraId(); ?>',
        title: '<?php echo "Gira de: ".$current->getGiraNombreEncargado(); ?>',
        start: '<?php echo $current->getGiraFechaGira();?>',
        end:   '<?php echo $current->getGiraFechaFin();?>',
        color: '<?php echo "#302E71"; ?>'
      },
      <?php } ?>
      ]

      });
      calendar.render();
      });
    </script>
    </br>
    <div class = "container col-md-8 offset-md-2 card-body card col-12 row justify-content-center" >
    <div id='calendar'></div>
    </div>
</body>
</html>