<!DOCTYPE html>
<html xml:th="http://thymeleaf.org">
<head>
    <title>Solicitud de Gira</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="funciones.js"></script>
    <h1><img  src="logo.png" height = "85px" width = "100px" alt="">Solicitud de Gira</h1>
</head>
</head>
<body>  
<header>  
<nav>  
<ul>  
<li>  
<a href="./SolicitudGiraDatosView.php"> Solicitud de Gira </a>  
</li>  
<li>  
<a href="./SolicitudGiraDestinoView.php"> Destino Gira </a>  
</li>  
<li>  
<a href="./SolicitudGiraItinerarioView.php"> Itinerario Gira </a>  
</li>  
<li> 
<a href="./SolicitudGiraParticipantesView.php"> Registro Participantes De La Gira </a>  
</li>   
</ul>  
</nav>  
</header>
<h1>Registro de Participantes a la Gira</h1>
<body>
    <div id="fondo">
        <form th:action="@{/registrar}" method="post">
          <table border="1px">
          <tr>
                <th>Cedula</th>
                <th>Nombre y Apellidos</th>
                <th>Carrera</th>
                <th>Institución</th>
            </tr>
</table>
<div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">&raquo;</a>
    </div>

        </form>
    </div>
    <form action="./PaginaPrincipalSolicitanteView.php">
        <input type="submit" value="Finalizar solicitud" />
        <div id="contenedor"></div>
    </form>
</body>
</html>
<?
