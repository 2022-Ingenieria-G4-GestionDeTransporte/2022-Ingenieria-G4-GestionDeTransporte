<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Reportes</title>
    </link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<center>
    <div style="background-color: #302E71">
        <br>
        <img src="../Images/LOGO-UNAHorizontal-BLANCO .png" alt="logo" width="200px">
        <h4 style="color: white">Sistema Gestión de Transportes</h4>
        <h5 style="color: white">Reportes</h5>
        <br>
    </div>
</center>
    <br><br>
<body>
    <header>
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
    <form action="./PaginaPrincipalAdministradorView.php">
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
