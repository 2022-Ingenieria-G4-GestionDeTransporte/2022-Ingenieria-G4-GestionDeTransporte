<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link rel = "stylesheet" href="../css/styl.css" type = "text/css"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../js/FunctionProyecto.js"></script>

    <?php
    include '../Business/GiraBusiness.php';
    //#302E71 #C30721
    ?>
</head>
<style>
  thead th {
  color: #fff;
}
</style>
<nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark" style="background-color: #302E71" aria-label="Navegación principal" _mstaria-label="441961">
        <div class="container-fluid">
            <a class="navbar-brand" href="./PaginaPrincipalSolicitanteView.php">
            <img src="../Images/LOGO-UNAHorizontal-BLANCO .png" alt="logo" width="200px">
            </a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="360672" _mstaria-label="320099">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbar" style="font-size: 1rem">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="javascript:CerrarSesion()" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="arrow-back-circle-sharp"></ion-icon> Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </br></br>
<center> 
    <div style="background-color: #302E71">
        <br>
        <h4 style="color: white">Sistema Gestión de Transportes</h4>
        <h5 style="color: white">Módulo de Solicitantes</h5>
        <br>
    </div>
</center>
<br>

<body>
    <center>
        <div class="container">
            <h4>Lista de Giras Realizadas</h4>
            <br>
            <table class="table">
                <thead style="background-color: #302E71;">
                    <tr>
                        <th>Encargado</th>
                        <th>Destino</th>
                        <th>Carrera</th>
                        <th>Tipo de gira</th>
                        <th>Ver Estado de Gira</th>

                    </tr>
                </thead>
                <tbody id=buscar>
                    <?php
                    $GiraBusiness = new GiraBusiness();
                    $allGiras = $GiraBusiness->getAllGira();
                    foreach ($allGiras as $current) {
                        echo '<form method="post" enctype="multipart/form-data" action="../business/GiraAction.php">';
                        echo '<input type="hidden" name="tbgiraid" value="' . $current->getGiraId() . '">';
                        echo '<td><input type="text" readonly name="tbgiranombreencargado" id="tbgiranombreencargado" value="' . $current->getGiraNombreEncargado() . '"/></td>';
                        echo '<td> Guápiles </td>';
                        echo '<td><input type="text" readonly name="tbgiracarrera" id="tbgiracarrera" value="' . $current->getGiraCarrera() . '"/></td>';
                        echo '<td><input type="text" readonly name="tbgiratipogira" id="tbgiratipogira" value="' . $current->getGiraTipoGira() . '"/></td>';
                        if ($current->getGiraEstado() == "Aprobada") {
                            $Estado = "Aprobada"; //Representar con colores
                            echo '<td><input type="button" class="buttonAprobado" readonly value= "' . $Estado . '" name="estado" id="estado"/></td>';
                        } else if ($current->getGiraEstado() == "Denegada") {
                            $Estado = "Denegada"; //Representar con colores
                            echo '<td><input type="button" class="buttonDenegado" readonly value= "' . $Estado . '" name="estado" id="estado"/></td>';
                        } else {
                            $Estado = "Sin revisar";
                            echo '<td><input type="button" class="buttonPendiente" readonly value= "' . $Estado . '" name="estado" id="estado"/></td>';
                        }

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
        </div>
        <div class="container">
        <form method="post" action="../business/SolicitanteAction.php">
            <input type="submit" class="btn btn-dark btn-block" value="Nueva Solicitud de gira" name="nuevaSolicitudGira" style="float: right">
        </form>
    </div>
    </center>
    <!--
    <div class="container">

        <br>
        <form method="post" action="../business/SolicitanteAction.php">
            <input type="submit" class="btn btn-dark btn-block" value="Cerrar sesión" name="back">
        </form>
    </div>-->

</body>

</html>