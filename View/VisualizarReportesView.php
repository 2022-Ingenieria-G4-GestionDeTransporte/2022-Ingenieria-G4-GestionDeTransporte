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
    <body class="body">
    <section class="vh-100" style="background-color: #302E71;">
      <div class="container py-5 h-50">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="../Images/Login.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <div class="container" style="right: inherit;">
                    <form action="">
                    <h1>Seleccione el reporte que desea cargar:</h1>
                      <select name="dato" id="dato" required>
                        <option value="funcionario">Funcionarios</option>
                        <option value="chofer">Chofer</option>
                        <option value="vehiculo">Vehiculos</option>
                        <option value="vehiculo">Giras</option>
                      </select>
                        <input type="submit" class="btn btn-dark" value="Generar pdf"/>
                        </form>
                        <form form action="./PaginaPrincipalAdministradorView.php">
                        <input type="submit" class="btn btn-secondary" value="Regresar" />
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
  <?
