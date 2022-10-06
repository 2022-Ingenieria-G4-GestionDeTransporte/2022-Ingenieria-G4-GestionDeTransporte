<?php
<!DOCTYPE html>

<html xml:th="http://thymeleaf.org">
<head>
    <title>Giras</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id="fondo">
        <h1>Lista de Giras Realizadas</h1>
        <br>
        </br>
        <table class="separado">
            <tr>
                <th>Nombre de gira</th>
                <th>Salida Campus</th>
                <th>Regreo Campus</th>
                <th>Estado de gira</th>
            </tr>
            <tr th:each="">
                <td th:text=""></td>
                <td th:text=""></td>
                <td th:text=""></td>
                <td th:text=""></td>
                <td><button th:onclick="verEstado" class="btnEstadoGira"></button></td>

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
        </br>
        <form action="/nuevaSolicitudGira">
            <input type="submit" value="Nueva Solicitud de Gira" />
            <div id="contenedor"></div>
        </form>
        </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

    </div>
</body>
</html>
?>
