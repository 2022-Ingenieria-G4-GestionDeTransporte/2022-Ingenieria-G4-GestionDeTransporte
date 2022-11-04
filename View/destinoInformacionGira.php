<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
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
            <h2>Destino e Itinerario de Gira</h2>
            <br>
            <table class = "separado">
                <tr>
                    <th>Destino (Provincia, Canton, Distrito)</th>
                    <th>Hospedaje</th>
                    <th>Fecha</th>
                    <th>Actividad</th>
                    <th>Hora de inicio/Hora de finalización</th>
                    <th>Salida SRHNC</th>
                    <th>Entrada SRHNC</th>
                </tr>
                <tr th:each="">
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                </tr>
            </table>
            <input type="submit" value="Regresar"/>
            </br>

        </div>
</body>
</html>