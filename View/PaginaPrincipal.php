<!DOCTYPE html>
<?php
error_reporting(0);
?>
<head>
    <script src="../js/Function.js"></script>
    <title>Calendario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include '../business/GiraBusiness.php';
    ?>
</head>
<body>
    <div id="fondo">
        <h1>Calendario</h1>
        
        <br>
        <select name="meses" id="meses">
            <option value="enero">Enero</option>
            <option value="febrero">Febrero</option>
            <option value="marzo">Marzo</option>
            <option value="abril">Abril</option>
            <option value="mayo">Mayo</option>
            <option value="junio">Junio</option>
            <option value="julio">Julio</option>
            <option value="agosto">Agosto</option>
            <option value="setiembre">Setiembre</option>
            <option value="octubre">Octubre</option>
            <option value="noviembre">Noviembre</option>
            <option value="diciembre">Diciembre</option>
        </select>
        <br>
        <ul>
            <li><a href="#">Informacion Personal</a></li>
            <li><a href="#">Modificar Datos Administrativos</a></li>
            <li><a href="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarListas.php">Visualizar Listas</a></li>
            <li><a href="#">Ver Reportes</a></li>
            <li><a href="/2022-Ingenieria-G4-GestionDeTransporte/View/visualizarGiras.php">Giras</a></li>
        </ul>

    </div>
</body>
</html>