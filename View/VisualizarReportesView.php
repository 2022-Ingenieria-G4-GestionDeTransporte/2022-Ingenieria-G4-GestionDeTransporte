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
        <?php
        include '../Business/GiraBusiness.php';
        //#302E71 #C30721
        ?>
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
    <br>
<body>
    <div class="container">
    <select name="dato" id="dato">
        <option value="funcionario">Funcionarios</option>
        <option value="chofer">Chofer</option>
        <option value="vehiculo">Vehiculos</option>
    </select>
    </div>
<br>
        <div class="container-lg">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar" _mstplaceholder="76154" _mstaria-label="76154">
                <button class="btn btn-outline-success" type="submit" _msthash="1202799" _msttexthash="76154">Buscar</button>
            </form>
        </div>
        <br>
        <div class="container">
            <table border="2"  class="table table-striped">
                <thead style="background-color: #302E71;">
                <tr>
                    <th>Nombre de Encargado</th>
                    <th>Fecha Solicitud</th>
                    <th>Fecha de Gira</th>
                    <th>Carrera</th>
                    <th>Tipo de Gira</th>
                    <th>Itinerario</th>
                    <th>Reportes</th>
                </tr>
                </thead>
                <tbody id="buscar">
                <?php
                    $GiraBusiness = new GiraBusiness();
                    $allGiras = $GiraBusiness->getAllGira();
                    foreach ($allGiras as $current) {
                        echo '<form method="post" enctype="multipart/form-data" action="../business/GiraAction.php">';
                        echo '<tr>';
                        echo '<input type="hidden" name="tbgiraid" value="' . $current->getGiraId() . '">';
                        echo '<td><input type="text" readonly name="tbgiranombreencargado" id="tbgiranombreencargado" value="' . $current->getGiraNombreEncargado() . '"/></td>';
                        echo '<td><input type="date" readonly name="tbgirafechasolicitud" id="tbgirafechasolicitud" value="' . $current->getGiraFechaSolicitud() . '"/></td>';
                        echo '<td><input type="date" readonly name="tbgirafechagira" id="tbgirafechagira" value="' . $current->getGiraFechaGira() . '"/></td>';
                        echo '<td><input type="text" readonly name="tbgiracarrera" id="tbgiracarrera" value="' . $current->getGiraCarrera() . '"/></td>';
                        echo '<td><input type="text" readonly name="tbgiratipogira" id="tbgiratipogira" value="' . $current->getGiraTipoGira() . '"/></td>';
                        echo '<td><input type="submit" class="material-symbols-outlined" value="visibility" name="ver" id="ver"/></td>';
                        echo '<td><input type="submit" class="material-symbols-outlined" value="add" name="reporte" id="ver"/></td>';
                        echo '</tr>';
                        echo '</form>';
                    }
                ?>
                </tbody>
            </table>
            <br>
            <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Siguiente</a>
                </li>
            </ul>
        </nav>
        </div>
        <br>

        <div class="container">
        <form form action="./PaginaPrincipalAdministradorView.php">
            <input type="submit" class="btn btn-secondary" value="Regresar" />
        </form>  
        </div>
</body>
</html>
  <?
