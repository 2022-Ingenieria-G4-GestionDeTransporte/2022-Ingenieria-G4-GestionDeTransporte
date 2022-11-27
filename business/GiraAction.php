<?php


if ($_POST['show']) {
        header("location: ../view/VisualizarDatosGiraView.php");
}if ($_POST['search']) {
    header("location: ../view/AnalizarGiraView.php");
}if ($_POST['back']) {
    header("location: ../view/GestionGirasView.php");
}