<?php


if ($_POST['show']) {
        header("location: ../view/InformacionGira.php");
}if ($_POST['search']) {
    header("location: ../view/analizarGira.php");
}if ($_POST['back']) {
    header("location: ../view/visualizarGiras.php");
}