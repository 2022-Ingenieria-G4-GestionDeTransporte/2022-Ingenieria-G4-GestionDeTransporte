<?php


if ($_POST['show']) {
       $id = $_POST['tbgiraid'];
        header("location: ../view/VisualizarDatosGiraView.php?id=$id");
}if ($_POST['search']) {
    header("location: ../view/AnalizarGiraView.php");
}if ($_POST['back']) {
    header("location: ../view/GestionGirasView.php");
}if ($_POST['ver']) {
    header("location: ../view/ItenerarioChoferView.php");
}if ($_POST['reporte']) {
    header("location: ../view/ReportesVehiculo.php");
}if ($_POST['volver']) {
    header("location: ../index.php");
}
//sds
