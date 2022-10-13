<!DOCTYPE html>
<html xml:th="http://thymeleaf.org">
<head>
    <title>Registro de Funcionarios!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="funciones.js"></script>
</head>
<body>
    <div id="fondo">
        <h1>Registro de Funcionarios!</h1>
        <form th:action="@{/registrar}" method="post">
            Nombre: <input type="text" name="nombre" required />
            Apellidos: <input type="text" name="apellidos" required /> </br>
            Correo Electronico: <input type="text" name="correo" required /> </br>
            Cargo: <input type="text" name="cargo" required />
            Cedula: <input type="text" name="cedula" required /> </br>
            <label><input type="checkbox" id="cbox1" value="Licencia de Conducir"> Licencia de Conducir</label><br>
            <label>Fecha de Vencimiento:</label></br>
            <input type="date" id="fecha" name="fecha"
                   value="2022-08-25"
                   min="2018-01-01" max="2030-12-31">
            </br></br>
            <input type="submit" value="Registrarse" />
            <div id="contenedor"></div>
        </form>
    </div>
<<<<<<< HEAD
    <form action="/2022-Ingenieria-G4-GestionDeTransporte/View/Index.php">
=======
    <form action="/2022-Ingenieria-G4-GestionDeTransporte/View/index.php">
>>>>>>> 51d00f1122315f076a598b910ef81fd5a4a9b52f
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>
</body>
</html>
<?
