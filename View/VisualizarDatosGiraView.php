<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Gira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <?php
    include('../Business/GiraBusiness.php');
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
            <a class="navbar-brand" href="./PaginaPrincipalAdministradorView.php">
                <img src="../Images/LOGO-UNAHorizontal-BLANCO .png" alt="logo" width="189px">
            </a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="360672" _mstaria-label="320099">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbar" style="font-size: 1rem">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="./GestionGirasView.php" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="arrow-back-circle-sharp"></ion-icon> Regresar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./VisualizarDatosGiraView.php" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="information-circle-sharp"></ion-icon> Información Básica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./VisualizarParticipantesGiraView.php?id=<?php $id //agregar bien direccionamiento de los nav?>"
                        <ion-icon name="people-sharp"></ion-icon> Participantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./VisualizarDestinoGiraView.php">
                        <ion-icon name="earth-sharp"></ion-icon> Destino e Itinerario</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</body>
</br>
</br>
<body class="">
    </br>
    <div style="background-color: #302E71">
        <h4 style="color: white">Sistema Gestión de Transportes</h4>
        <h5 style="color: white">Información General de la Gira</h5>
        <br>
    </div>
    </br></br>
    <div class="container px-4">

    <?php
    $id = "";
    $color = "";
    $nombre = "aaa";
    if(isset($_GET['color'])){
    $color = $_GET['color'];
    }
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    }
    $GiraBusiness = new GiraBusiness();
    $Gira = $GiraBusiness->getGira($id);
    ?>
    <?php
        echo'<form>
            <div class="row">
                <div class="form-group col">
                    <label><b>Fecha de solicitud:</b></label>
                    <input type="date" class="form-control" placeholder="Ingrese la fecha de solicitud de la gira..." name="fechaSolicitud" value = "'. $Gira->getGiraFechaGira() .'" required=""> <br>

                    <label><b>Encargado de la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el Encargado de la gira..." value = "'. $Gira->getGiraNombreEncargado() .'" name="encargado" required=""> <br>
                  
                    <label><b>Numero de cedula de encargado de la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el numero de cedula..."  value = "'. $Gira->getGiraCedulaEncargado() .'" name="cedula" required=""> <br>

                    <label><b>Nombre del curso:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre del curso..." value = "'. $Gira->getGiraCurso() .'" name="NCR" required=""> <br>

                    <label><b>NRC del curso:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el NRC del curso..." value = "'. $Gira->getGiraCursoNRC() .'" name="NCR" required=""> <br>

                    <label><b>Área a la que pertenece la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el area de la gira..." value = "'. $Gira->getGiraArea() .'" name="area" required=""> <br>

                    <label><b>Requiere chofer:</b></label>
                    <div class="form-check">
                        ';if($Gira->getGiraRequireChofer()==1){echo'
                        <input class="form-check-input" type="checkbox" checked value="" id="flexCheckDefault">
                        ';}else{echo'
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        ';}echo'
                        <label class="form-check-label" for="flexCheckDefault">
                            Sí
                        </label>
                    </div>
                    <div class="form-check">
                        ';if($Gira->getGiraRequireChofer()==0){echo'
                        <input class="form-check-input" type="checkbox" checked value="" id="flexCheckChecked">
                        ';}else{echo'
                        <input class="form-check-input" type="checkbox"  value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckDefault">
                        ';}echo'
                            No
                        </label>
                    </div>
                </div>
                <div class="form-group col">
                    <label><b>Fecha inicial de la gira:</b></label>
                    <input type="date" class="form-control" placeholder="Ingrese la fecha inicial de la gira..." value = "'. $Gira->getGiraFechaGira() .'" name="fechaInicial" required=""> <br>

                    <label><b>Fecha final de la gira:</b></label>
                    <input type="date" class="form-control" placeholder="Ingrese la fecha final de la gira..." value = "'. $Gira->getGiraFechaFin() .'" name="fechaFinal" required=""> <br>

                    <label><b>Acompañante de la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el acompañante de la gira..." value = "'. $Gira->getGiraNombreAcompanante() .'" name="acompanante" required=""> <br>

                    <label><b>Numero de cedula del acompañante de la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el numero de cedula..." value = "'. $Gira->getGiraCedulaAcompanante() .'" name="cedula" required=""> <br>

                    <label><b>Carrera o proyecto:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese la Carrera o proyecto..." value = "'. $Gira->getGiraCarrera() .'" name="carrera" required=""> <br>

                    <label><b>Tipo de Vehiculo:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el tipo de Vehiculo..." name="tipo" required=""> <br>

                    <label><b>Nombre del chofer:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre del chofer..." name="chofer" required=""> <br>

                </div>

            </div>
        </form>'
        ?>
        <br>

        <input type="submit" class="btn btn-dark btn-block" value="Actualizar y Guardar" />
    </div>
    <br>


</body>

</html>