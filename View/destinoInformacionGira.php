<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<img src="../Images/UNA-transparente.png" class="img-thumbnail" style="float:right" width="155" height="150">
<h3>Sistema Gestión de Transportes</h3>
    <h5>Destino e Itinerario de Gira</h5>
    <br>

<body>
<ul class="nav nav-pills" style="background-color: #302E71">
<li class="nav-item">
            <a class="nav-link" style="color: white" aria-current="page" href="./visualizarGiras.php">Regresar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" aria-current="page" href="./informacionGira.php">Información Básica</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" href="./participantesGira.php">Participantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="color: white" aria-current="page" href="./destinoInformacionGira.php">Destino e Itinerario</a>
        </li>
    </ul>
<div class = "container">
            <br>
            <table class = "table">
                <thead class="table-dark">
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
            <input type="submit" value="Actualizar y Guardar"/>
            </br>

        </div>
</body>
</html>