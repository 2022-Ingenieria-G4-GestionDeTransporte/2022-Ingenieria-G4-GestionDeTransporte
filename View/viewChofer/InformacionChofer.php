<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chofer</title>
</head>
<body>
    <center>
        <header>
            <h1>Estado de Gira</h1>
            <br>
            <br>

            <br>
            <form th:action="@{/filtroBusqueda}" method="post">
            <input type="submit" value="<"><input type="search" name="tipo" required placeholder="Buscar">
            </form>
            </br>
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
?>
                <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a href="#" class="active">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">&raquo;</a>
            </div>


        </header>
    </center>
</body>
</html>
