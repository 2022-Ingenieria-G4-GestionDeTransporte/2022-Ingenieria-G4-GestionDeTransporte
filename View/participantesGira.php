<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    include '../Business/ParticipantesBusiness.php';
    ?>
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
            <a class="nav-link active" style="color: white" href="./participantesGira.php">Participantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" aria-current="page" href="./destinoInformacionGira.php">Destino e Itinerario</a>
        </li>
    </ul>

    <h2>Informacion de participantes de gira</h2>
    <div class="container">
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Carrera</th>
                    <th>Institución</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ParticipantesBusiness = new ParticipantesBusiness();
                $allParticipantes = $ParticipantesBusiness->getAllParticipantes();
                foreach ($allParticipantes as $current) {
                    echo '<input type="hidden" name="tbparticipanteid" value="' . $current->getParticipanteId() . '">';
                    echo '<td><input type="text" readonly name="tbparticipantecedula" id="tbparticipantecedula" value="' . $current->getParticipanteCedula() . '"/></td>';
                    echo '<td><input type="text" readonly name="tbparticipantenombre" id="tbparticipantenombre" value="' . $current->getParticipanteNombre() . '"/></td>';
                    echo '<td><input type="text" readonly name="tbparticipanteapellidos" id="tbparticipanteapellidos" value="' . $current->getParticipanteApellidos() . '"/></td>';
                    echo '<td><input type="text" readonly name="tbparticipantecarrera" id="tbparticipantecarrera" value="' . $current->getParticipanteCarrera() . '"/></td>';
                    echo '<td><input type="text" readonly name="tbparticipanteinstitucion" id="tbparticipanteinstitucion" value="' . $current->getParticipanteInstitucion() . '"/></td>';
                    echo '<td><input type="hidden" name="tbparticipanteidgira" id="tbparticipanteidgira" value="' . $current->getGiraId() . '"/></td>';

                    echo '</tr>';
                    echo '</form>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>