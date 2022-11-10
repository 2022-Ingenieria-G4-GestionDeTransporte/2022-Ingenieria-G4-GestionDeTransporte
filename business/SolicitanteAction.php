<?php

if ($_POST['nuevaSolicitudGira']) {
        header("location: ../view/SolicitarGira.php");
}
if ($_POST['back']) {
    header("location: ../index.php");
}