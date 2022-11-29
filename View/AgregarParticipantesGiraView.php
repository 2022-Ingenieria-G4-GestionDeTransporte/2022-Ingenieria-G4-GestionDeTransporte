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
                        <a class="nav-link" href="./VisualizarDatosGiraView.php" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="information-circle-sharp"></ion-icon> Información Básica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./VisualizarParticipantesGiraView.php">
                        <ion-icon name="people-sharp"></ion-icon> Participantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./VisualizarDestinoGiraView.php">
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
        <h3 style="color: white">Sistema Gestión de Transportes</h3>
        <h5 style="color: white">Ingresar participantes de la gira</h5>
        <br>
    </div>
    </br></br>
        <center>
              <br>
            <br>
            <table>
                <td>
                    <div class="mb-2" width='200'>
                        <label for="formFile" class="form-label">Actualizar archivo de registro de participantes</label>
                        <input class="form-control" type="file" id="formFile">

                    </div>
                </td>
                <td><input type="submit" class="btn btn-dark btn-block" name="actualizarParticipantes" id="actualizarParticipantes" value="Guardar" /></td>
            </table>
        </center>
        <!--<table class="table table-striped table-responsive">
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
                /*$ParticipantesBusiness = new ParticipantesBusiness();
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
                }*/
            </tbody>

        </table>-->
</body>

</html>