<?php

if ($_POST['nuevaSolicitudGira']) {
        header("location: ../view/SolicitudGiraDatosView.php");
}
if ($_POST['back']) {
    header("location: ../index.php");
}