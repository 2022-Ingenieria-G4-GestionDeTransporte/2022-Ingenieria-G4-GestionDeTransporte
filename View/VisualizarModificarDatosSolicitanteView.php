<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Gira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<style>
    thead th {
        color: #fff;
    }
</style>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar navbar-dark" style="background-color: #302E71" aria-label="Navegación principal" _mstaria-label="441961">
        <div class="container-fluid">
            <a class="navbar-brand" href="./PaginaPrincipalAdministradorView.php">
                <img src="../Images/LOGO-UNAHorizontal-BLANCO .png" alt="logo" width="189px">
            </a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="360672" _mstaria-label="320099">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbar" style="font-size: 1rem">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="./GestionSolicitantesView.php" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="arrow-back-circle-sharp"></ion-icon>Regresar
                        </a>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
</body>
</br>
</br>
<body class="">
    </br>
    <div style="background-color: #302E71">
        <h4 style="color: white">Sistema Gestión de Transportes</h4>
        <h5 style="color: white">Información del Solicitante Seleccionado</h5>
        <br>
    </div>
    </br></br>
    <div class="container px-4">
        <form>
            <div class="row">
                <div class="form-group col">
                    <label><b>Nombre:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre del solicitante..." name="nombre" required=""> <br>

                    <label><b>Apellidos:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese los apellidos del solicitante..." name="apellidos" required=""> <br>

                    <label><b>Cédula:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese la cédula del solicitante..." name="cedula" required=""> <br>

                    <label><b>Cargo:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el cargo que desempeña el solicitante..." name="cargo" required=""> <br>
                    
                    <label><b>Posee Licencia:</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label">
                            Sí
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label">
                            No
                        </label>
                    </div>
                </div>
                <div class="form-group col">
                    <label><b>Fecha de Vencimiento de la Licencia:</b></label>
                    <input type="date" class="form-control"  name="area" required=""> <br>

                    
                    <label><b>Correo Electrónico:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el correo electrónico del solicitante..." name="correo" required=""> <br>


                    <label><b>Contraseña:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese la contraseña del solicitante..." name="password" required=""> <br>
                </div>

            </div>
        </form>
        <br>

        <input type="submit" class="btn btn-dark btn-block" value="Actualizar y Guardar" />
    </div>
    <br>


</body>

</html>