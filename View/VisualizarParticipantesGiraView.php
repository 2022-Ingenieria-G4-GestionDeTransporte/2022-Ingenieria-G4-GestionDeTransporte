<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <?php
    include '../Business/ParticipantesBusiness.php';
    ?>
</head>
<style>
  thead th {
  color: #fff;
}
</style>
<div style="background-color: #AA041B">
    <img src="../Images/UNA-transparente.png" class="img-thumbnail" style="float:right" width="155" height="150">
    <h3 style="color: white">Sistema Gestión de Transportes</h3>
    <h5 style="color: white">Información participantes de la gira</h5>
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
            <a class="nav-link active" style="color: white" href="./VisualizarParticipantesGiraView.php">Participantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" aria-current="page" href="./VisualizarDestinoGiraView.php">Destino e Itinerario</a>
        </li>
    </ul>
    <br><br>


    <div class="container">
        <table class="table table-striped table-responsive">
            <thead style="background-color: #302E71;">
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
    </div>
</body>

</html>