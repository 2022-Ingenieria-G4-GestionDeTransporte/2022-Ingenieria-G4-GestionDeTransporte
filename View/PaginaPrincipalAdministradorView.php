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
    <script src="../js/FunctionProyecto.js"></script>
    <link rel ="stylesheet" href="../css/styleProyect.css" type = "text/css"></link>
    <link rel="stylesheet" type="text/css" href="../css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <script src ="../js/jquery-3.0.0.min.js"> </script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/moment.min.js"></script>	
    <script type="text/javascript" src="../js/fullcalendar.min.js"></script>
    <script src='../locales/es.js'></script>

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
            <a class="nav-link" href="javascript:CerrarSesion()" _msthash="1070771" _msttexthash="282880">
            <ion-icon name="log-out-outline"></ion-icon> Cerrar Sesión
            </a>
          </li>
        </ul>
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
  <div class = "container col-md-8 offset-md-2 card-body card col-12 row justify-content-center" >
    <div id='calendar'></div>
    </div>
  <?php
include('../Data/config.php');
  $SqlEventos   = ("SELECT * FROM tbgira WHERE tbgiraestado = 'Aprobada'");
  $resulEventos = mysqli_query($con, $SqlEventos);
?>
<div class="mt-5"></div>
<div class="container">
  <div class="row">
    <div class="col msjs">
      <?php
        include('../Business/msjs.php');
      ?>
    </div>
  </div>
</div>
<?php  
  include('../Business/modalNuevoEvento.php');
  include('../Business/modalUpdateEvento.php');
?>

<script type="text/javascript">
$(document).ready(function() {
  $("#calendar").fullCalendar({
    header: {
      left: "prev,next today",
      center: "title",
      right: "month,agendaWeek,agendaDay"
    },

    locale: 'es',

    defaultView: "month",
    navLinks: true, 
    editable: true,
    eventLimit: true, 
    selectable: true,
    selectHelper: false,

//Nuevo Evento
    select: function(start, end){
      $("#exampleModal").modal();
      $("input[name=tbgirafechagira]").val(start.format('DD-MM-YYYY'));
       
      var valorFechaFin = end.format("DD-MM-YYYY");
      var F_final = moment(valorFechaFin, "DD-MM-YYYY").subtract(1, 'days').format('DD-MM-YYYY'); //Le resto 1 dia
      $('input[name=tbgirafechafin').val(F_final);  

    },
      
    events: [
      <?php
       while($dataEvento = mysqli_fetch_array($resulEventos)){ ?>
          {
          _id: '<?php echo $dataEvento['tbgiraid']; ?>',
          title: 'Gira de:'+'<?php echo $dataEvento['tbgiranombreencargado']; ?>',
          start: '<?php echo $dataEvento['tbgirafechagira']; ?>',
          end:   '<?php echo $dataEvento['tbgirafechafin']; ?>',
          color: '<?php echo $dataEvento['tbgiracolor']; ?>'
          },
        <?php } ?>
    ],


//Eliminar Evento
eventRender: function(event, element) {
    element
      .find(".fc-content")
      .prepend("<span id='btnCerrar'; class='closeon material-icons'>&#xe5cd;</span>");
    
    //Eliminar evento
    element.find(".closeon").on("click", function() {

  var pregunta = confirm("Deseas Borrar esta gira?");   
  if (pregunta) {

    $("#calendar").fullCalendar("removeEvents", event._id);

     $.ajax({
            type: "POST",
            url: '../Business/deleteEvento.php',
            data: {id:event._id},
            success: function(datos)
            {
              $(".alert-danger").show();

              setTimeout(function () {
                $(".alert-danger").slideUp(500);
              }, 3000); 

            }
        });
      }
    });
  },


//Moviendo Evento Drag - Drop
eventDrop: function (event, delta) {
  var idEvento = event._id;
  var start = (event.start.format('DD-MM-YYYY'));
  var end = (event.end.format("DD-MM-YYYY"));

    $.ajax({
        url: '../Business/drag_drop_evento.php',
        data: 'start=' + start + '&end=' + end + '&idEvento=' + idEvento,
        type: "POST",
        success: function (response) {
         // $("#respuesta").html(response);
        }
    });
},

//Modificar Evento del Calendario 
eventClick:function(event){
    var idEvento = event._id;
    $('input[name=idEvento').val(idEvento);
    $('input[name=evento').val(event.title);
    $('input[name=fecha_inicio').val(event.start.format('DD-MM-YYYY'));
    $('input[name=fecha_fin').val(event.end.format("DD-MM-YYYY"));
    //alert("aaa");
    $("#modalUpdateEvento").modal();
  },


  });


//Oculta mensajes de Notificacion
  setTimeout(function () {
    $(".alert").slideUp(300);
  }, 3000); 

//calendar.render();
});

</script>
    
</body>
</html>