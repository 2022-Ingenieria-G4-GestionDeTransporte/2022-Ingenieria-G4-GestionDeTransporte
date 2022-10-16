<!DOCTYPE html>
<html xml:th="http://thymeleaf.org">
<head>

    <title>Registro de Chofer!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <script type="text/javascript" src="funciones.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <h1><img  src="logo.png" height = "85px" width = "100px" alt=""> --Registro de Chofer--</h1>

</head>
<body>
    <div id="fondo">
        <form th:action="@{/registrar}" method="post">
            Cedula: <input type="text" name="cedula" required /> </br>
            Nombre: <input type="text" name="nombre" required /> </br>
            Contraseña: <input type="text" /> </br>
            Vigencia de licencia: <input type="text" /> </br>
            Fecha vencimiento licencia: <input type="text" /> </br>
                           
            <input type="submit" value="Registrar!" />
            <div id="contenedor"></div>
        </form>
        
    </div>

    <form action="/2022-Ingenieria-G4-GestionDeTransporte/View/Index.php">
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>
</body>
</html>
<?
