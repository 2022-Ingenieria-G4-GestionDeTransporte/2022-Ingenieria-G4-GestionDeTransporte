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
<h1>Ingresar Datos:</h1>
<body>
    <div id="fondo">
        <form th:action="@{/registrar}" method="post">
            Nombre Encargado: <input type="text" name="nombre" required />
            Apellido Encargado: <input type="text" name="apellidos" required /> </br>
            Fecha Solicitud: <input type="date" name="fecha" required />
            Cedula Acompañante: <input type="text" name="cargo" required /></br>
            Nombre Acompañante: <input type="text" name="cedula" required /> 
            Carrera: <input type="text" name="cedula" required />  </br>
            Cedula encargado: <input type="text" name="cedula" required />
            Nombre Curso: <input type="text" name="cedula" required />  </br>
            Fecha Gira: <input type="text" name="cedula" required />
            Nombre Chofer: <select> 
            <option value ="0">Seleccionar</option>
                <option value ="1">NombreChofer1</option>
                <option value ="2">NombreChofer2</option>
            </select></br>
            Area perteneciente: <select> 
            <option value ="0">Seleccionar</option>
                <option value ="1">opcion1</option>
                <option value ="2">opcion2</option>
            </select></br>
            <div id="contenedor"></div>
        </form>
    </div>
    <form action="./PaginaPrincipalSolicitanteView.php">
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>
</body>
</html>
<?
