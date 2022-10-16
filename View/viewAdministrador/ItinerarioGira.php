<!DOCTYPE html>
<html xml:th="http://thymeleaf.org">
<head>
    <title>Itinerario!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="funciones.js"></script>
    <h1><img  src="logo.png" height = "85px" width = "100px" alt=""> --Itinerario Gira--</h1>
</head>
<body>
    <div id="fondo">
        <form th:action="@{/registrar}" method="post">
          <table border="1px">
          <tr>
                <th>Fecha</th>
                <th>Actividad</th>
                <th>Hora Inicio</th>
                <th>Hora Finalización</th>
            </tr>

            
</table>
<div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">&raquo;</a>
    </div>
        </form>
        Objetivo General De La Cita:  <input type="text" size = "50" style="height: 100px" style="width: 400px" value="" />
    </div>
    <form action="/2022-Ingenieria-G4-GestionDeTransporte/View/Index.php">
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>
</body>
</html>
<?
