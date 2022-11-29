<?php              
$idEvento         = $_POST['idEvento'];
$color_evento      = $_REQUEST['color_evento'];

header("Location:../View/VisualizarDatosGiraView.php?id=$idEvento&color=$$color_evento");
?>