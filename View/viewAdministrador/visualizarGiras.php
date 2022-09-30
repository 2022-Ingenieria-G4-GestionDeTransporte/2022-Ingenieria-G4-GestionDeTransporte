<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Giras</title>
</head>
<body>
<h1>Lista de Giras</h1>
    <br>
    <form th:action="@{/filtroBusqueda}" method="post">
        <input type="submit" value="<"><input type="search" name="tipo" required placeholder="Buscar">
    </form>
    </br>
    <form action="/paginaPrincipal">
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>
    <table class="lista" border="1px">
        <tr>
            <th>Dato1</th>
            <th>Dato2</th>
            <th>Dato3</th>
            <th>Visualizar y Eliminar</th>
            <th>Analizar Giras</th>
            <th>Estado de Giras</th>
        </tr>
        <tr th:each="temp:${lista}">
            <td th:text="${temp.Dato1}"></td>
            <td th:text="${temp.Dato2}"></td>
            <td th:text="${temp.Dato3}"></td>
            <td><a href="./informacionGira.php">Visualizar Giras</a></td>
            <td><a href="./analizarGira.php">Analizar</a></td>
            <td><button th:onclick="javascript:eliminar('[[${temp.cedula}]]')" class="btnEstado"></button></td>
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