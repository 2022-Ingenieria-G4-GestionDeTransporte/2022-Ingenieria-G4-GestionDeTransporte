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
</head>
<style>
  thead th {
  color: #fff;
}
</style>

<div style="background-color: #AA041B">
    <img src="../Images/UNA-transparente.png" class="img-thumbnail" style="float:right" width="155" height="150">
    <h3 style="color: white">Sistema Gestión de Transportes</h3>
    <h5 style="color: white">Destino e Itinerario de Gira</h5>
    <br>
</div>

<body>
    <ul class="nav nav-pills" style="background-color: #302E71">
        <li class="nav-item">
            <a class="nav-link" style="color: white" aria-current="page" href="./GestionGirasView.php" _msthash="1070225" _msttexthash="177827">
                <ion-icon name="arrow-back-circle-outline"></ion-icon>Regresar
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" aria-current="page" href="./VisualizarDatosGiraView.php">Información Básica</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" href="./VisualizarParticipantesGiraView.php">Participantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="color: white" aria-current="page" href="./VisualizarDestinoGiraView.php">Destino e Itinerario</a>
        </li>
    </ul>
    <div class="container">
        <br>
        <table class="table">
            <thead style="background-color: #302E71;">
                <tr>
                    <th>Destino (Provincia, Canton, Distrito)</th>
                    <th>Hospedaje</th>
                    <th>Fecha</th>
                    <th>Actividad</th>
                    <th>Hora de inicio/Hora de finalización</th>
                    <th>Salida SRHNC</th>
                    <th>Entrada SRHNC</th>
                </tr>
            </thead>
            <tbody>
                <tr th:each="">
                    <td>Limon, Guacimo, Guacimo</td>
                    <td>Hotel Los Rios</td>
                    <td>07-11-2022</td>
                    <td>Actividades Recreativas</td>
                    <td>7:00 am / 7:00 pm</td>
                    <td>6:00 am</td>
                    <td>8:00 pm</td>
                </tr>
            </tbody>
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
        
        <input type="submit" class="btn btn-dark btn-block" value="Actualizar y Guardar" />
        </br>

    </div>
</body>

</html>