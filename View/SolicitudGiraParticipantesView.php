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
                        <a class="nav-link" href="./PaginaPrincipalSolicitanteView.php" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="arrow-back-circle-sharp"></ion-icon> Regresar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./SolicitudDeGiraView.php" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="information-circle-sharp"></ion-icon> Información Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./SolicitudGiraDestinoView.php">
                        <ion-icon name="earth-sharp"></ion-icon> Destinos de la Gira</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./SolicitudGiraItinerarioView.php">
                        <ion-icon name="information-circle-sharp"></ion-icon> Itinerario de la Gira</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./SolicitudGiraParticipantesView.php">
                        <ion-icon name="people-sharp"></ion-icon> Participantes de la Gira</a>
                    </li>
                    
                </ul>
        </div>
    </nav>
</body>
</br>
</br>
<body class="">
    </br>
    <div style="background-color: #302E71">
        <h3 style="color: white">Sistema Gestión de Transportes</h3>
        <h5 style="color: white">Ingresar Participantes de la Gira</h5>
        <br>
    </div>
    </br></br>
        <center>
                   <br>
            <table>
                <td>
                    <div class="mb-2" width='200'>
                        <label for="formFile" class="form-label">Ingresar imagen de registro de participantes</label>
                        <input class="form-control" type="file" id="formFile">

                    </div>
                </td>
              </table>

             
        </center>
        <br>

        <div align="center"> 
            <input style = "width: 200px" type="submit" class="btn btn-dark btn-block" value="Finalizar Solicitud" />
            </div>
           
        
</body>

</html>