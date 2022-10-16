<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include '../business/GiraBusiness.php';
    ?>
</head>

<body>
    <table border="1px">
        <tr>
            <th>Nombre de Encargado</th>
            <th>Apellido de Encargado</th>
            <th>Cedula Encargado</th>
            <th>Fecha Solicitud</th>
            <th>Nombre de Acompañante</th>
            <th>Apellido de Acompañante</th>
            <th>Cedula Acompañante</th>
            <th>Fecha de Gira</th>
            <th>Carrera</th>
            <th>Tipo de Gira</th>
            <th>Requiere Chofer</th>
            <th>Objetivo</th>
            <th>Chofer</th>
            <th>Eliminar</th>
            <th>Analizar Gira</th>
            <th>Estado de gira</th>
            <th></th>
        </tr>
        <tbody id=buscar>
            <?php
            $GiraBusiness = new GiraBusiness();
            $allGiras = $GiraBusiness->getAllGira();
            foreach ($allGiras as $current) {
                echo '<form method="post" enctype="multipart/form-data" action="../business/GiraAction.php">';
                echo '<input type="hidden" name="tbgiraid" value="' . $current->getGiraId() . '">';
                echo '<td><input type="text" name="tbgiranombreencargado" id="tbgiranombreencargado" value="' . $current->getGiraNombreEncargado() . '"/></td>';
                echo '<td><input type="text" name="tbgiraapellidoencargado" id="tbgiraapellidoencargado" value="' . $current->getGiraApellidoEncargado() . '"/></td>';
                echo '<td><input type="text" name="tbgiracedulaencargado" id="tbgiracedulaencargado" value="' . $current->getGiraCedulaEncargado() . '"/></td>';
                echo '<td><input type="date" name="tbgirafechasolicitud" id="tbgirafechasolicitud" value="' . $current->getGiraFechaSolicitud() . '"/></td>';
                echo '<td><input type="text" name="tbgiranombreacompanante" id="tbgiranombreacompanante" value="' . $current->getGiraNombreAcompanante() . '"/></td>';
                echo '<td><input type="text" name="tbgiraapellidoacompanante" id="tbgiraapellidoacompanante" value="' . $current->getGiraApellidoACompanante() . '"/></td>';
                echo '<td><input type="text" name="tbgiracedulaacompanante" id="tbgiracedulaacompanante" value="' . $current->getGiraCedulaAcompanante() . '"/></td>';
                echo '<td><input type="date" name="tbgirafechagira" id="tbgirafechagira" value="' . $current->getGiraFechaGira() . '"/></td>';
                echo '<td><input type="text" name="tbgiracarrera" id="tbgiracarrera" value="' . $current->getGiraCarrera() . '"/></td>';
                echo '<td><input type="text" name="tbgiratipogira" id="tbgiratipogira" value="' . $current->getGiraTipoGira() . '"/></td>';
                echo '<td><input type="text" name="tbgirarequierechofer" id="tbgirarequierechofer" value="' . $current->getGiraRequireChofer() . '"/></td>';
                echo '<td><input type="text" name="tbgiraobjetivo" id="tbgiraobjetivo" value="' . $current->getGiraObjetivo() . '"/></td>';
                echo '<td><input type="text" name="tbgiraidchofer" id="tbgiraidchofer" value="' . $current->getGiraIdChofer() . '"/></td>';
                echo '<td><input type="submit" value="Eliminar" name="delete" id="delete"/></td>';
                echo '<td><input type="submit" value="Analizar" name="analizar" id="analizar"/></td>';
                echo '<td><input type="submit" value="O" name="estado" id="estado"/></td>';
                echo '</form>';
            }
            ?>
        </tbody>
    </table>

</body>

</html>