<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div style="background-color: #d1052a">
    <img src="../Images/UNA-transparente.png" class="img-thumbnail" style="float:right" width="155" height="150">
    <h3 style="color: white">Sistema Gestión de Transportes</h3>
    <h5 style="color: white">Módulo de Solicitantes</h5>
    <br>
</div>
<br>

<body>
    <div class="container">
        <form method="post" action="../business/SolicitanteAction.php">
            <input type="submit" class="btn btn-secondary" value="Nueva Solicitud de gira" name="nuevaSolicitudGira" style="float: right">
        </form>
    </div>

    <br>
    <br>
    <center>
        <h4>Lista de Giras Realizadas</h4>
        <br>
        <div class="container">
            <table class="table table-striped table-responsive">
                <thead class="table-dark">
                    <tr>
                        <th>Encargado</th>
                        <th>Destino</th>
                        <th>Carrera</th>
                        <th>Tipo de gira</th>
                        <th>Ver Estado de Gira</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kendall</td>
                        <td>Guácimo</td>
                        <td>Ingeniería en Sistemas</td>
                        <td>Educativa</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
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

    </center>

    <div class="container">

        <br>
        <form method="post" action="../business/SolicitanteAction.php">
            <input type="submit" class="btn btn-secondary" value="Cerrar sesión" name="back">
        </form>
    </div>

</body>

</html>
<?
