<?php

if ($_POST['nuevaSolicitudGira']) {
        header("location: ../View/SolicitudDeGiraView.php");
}
if ($_POST['back']) {
    header("location: ../index.php");
}
if ($_POST['view']) {
    header("location: ../View/VisualizarModificarDatosSolicitanteView.php");
}