<!DOCTYPE html>
<html xml:th="http://thymeleaf.org">
<head>
    <title>Registro de Vehiculos!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="funciones.js"></script>
    <h1><img  src="logo.png" height = "85px" width = "100px" alt=""> --Registro de Vehiculos--</h1>
</head>
<body>
    <div id="fondo">
        <form th:action="@{/registrar}" method="post">
            Placa:      <input type="text" name="nombre" required /> </br>
            Modelo: <input type="text" name="apellidos" required /> </br>
            Tipo Vehiculo:<select> 
            <option value ="0">Seleccionar</option>
                <option value ="1">Pickup</option>
                <option value ="2">Buseta</option>
                <option value ="3">Bus</option>
                <option value ="4">Prado</option>
            </select></br>
            Disponible: <input type="checkbox" /> </br>
            Nivel de aceite: <input type="text" /> </br>
            Kilometraje: <input type="text" /> </br>
                     
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
