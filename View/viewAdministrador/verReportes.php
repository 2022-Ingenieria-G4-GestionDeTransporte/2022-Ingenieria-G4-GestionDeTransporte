<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Reportes</title>
</head>
<body>
    <header>
        <h1>Reportes</h1>
    </header>

    <br>
    <select name="dato" id="dato">
        <option value="Dato1">Choferes</option>
        <option value="Dato2">Funcionarios</option>
        <option value="Dato3">Vehiculos</option>
    </select>
    </br>

    <br>
    <form th:action="@{/filtroBusqueda}" method="post">
        <input type="submit" value="<"><input type="search" name="tipo" required placeholder="Buscar">
    </form>
    </br>
    <form action="/paginaPrincipal">
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>
    <table class="lista">
        <tr>
            <th>Dato1</th>
            <th>Dato2</th>
            <th>Dato3</th>
           
        </tr>
        <tr th:each="temp:${lista}">
            <td th:text="${temp.Dato1}"></td>
            <td th:text="${temp.Dato2}"></td>
            <td th:text="${temp.Dato3}"></td>
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
</body>
</html>
  <?