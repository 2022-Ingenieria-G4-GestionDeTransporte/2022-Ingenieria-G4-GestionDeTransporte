<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel = "stylesheet" href="../css/styleProyect.css" type = "text/css"></link>

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
                        <ion-icon name="arrow-back-circle-sharp"></ion-icon>Regresar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./VisualizarDatosGiraView.php" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="information-circle-sharp"></ion-icon>Información Básica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./VisualizarParticipantesGiraView.php">
                        <ion-icon name="people-sharp"></ion-icon>Participantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./VisualizarDestinoGiraView.php">
                        <ion-icon name="earth-sharp"></ion-icon>Destino e Itinerario</a>
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
        <h5 style="color: white">Destino e Itinerario de Gira</h5>
        <br>
    </div>
    </br></br>
    <div class="container">
        <br>
        <center><div class="table-responsive card-body card mask-custom col-12 row justify-content-center container">
        <table class="table table-borderless text-white mb-0">
            <thead style="background-color: #302E71;">
                <tr>
                    <th>Destino (Provincia, Cantón, Distrito)</th>
                    <th>Hospedaje</th>
                    <th>Fecha</th>
                    <th>Actividad</th>
                    <th>Hora de inicio/Hora de finalización</th>
                    <th>Salida SRHNC</th>
                    <th>Entrada SRHNC</th>
                </tr>
            </thead>
            <tbody>
                
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
        
        <input type="submit" class="btn btn-dark btn-block" value="Actualizar y Guardar" />
        </br>

    </div>
</body>

</html>