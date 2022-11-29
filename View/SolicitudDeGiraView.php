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
                        <a class="nav-link" href="./PaginaPrincipalSolicitanteView.php" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="arrow-back-circle-sharp"></ion-icon> Regresar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./SolicitudDeGiraView.php" _msthash="1070225" _msttexthash="177827">
                        <ion-icon name="information-circle-sharp"></ion-icon> Información Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./SolicitudGiraDestinoView.php">
                        <ion-icon name="bus"></ion-icon> Destino de la Gira</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./SolicitudGiraItinerarioView.php">
                        <ion-icon name="bookmarks"></ion-icon> Itinerario de la Gira</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./SolicitudGiraParticipantesView.php">
                        <ion-icon name="people-sharp"></ion-icon> Participantes</a>
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
        <h5 style="color: white">Información General de la Gira</h5>
        <br>
    </div>
    </br></br>
    <div class="container px-4">
        <form action="../View/AgregarParticipantesGiraView.php">
            <div class="row">
                <div class="form-group col">
                     <label><b>Fecha de Solicitud:</b></label>
                    <input type="date" class="form-control" placeholder="Ingrese la fecha de la gira..." name="fecha" required=""> <br>

                    <label><b>Encargado de la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el Encargado de la gira..." name="encargado" required=""> <br>

                    <label><b>Acompañante de la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el acompañante de la gira..." name="acompanante" required=""> <br>

                    <label><b>Carrera o proyecto:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese la Carrera o proyecto..." name="carrera" required=""> <br>

                   
                    <label><b>Codigo y NRC del curso o proyecto:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el NRC y codigo..." name="NCR" required=""> <br>

                    <label><b>Tipo de Vehiculo Requerido:</b></label>
                    <select class="form-select" aria-label="Default select example">
    <option selected>Seleccione...</option>
    <option value="1">Pickup</option>
    <option value="2">Buseta</option>
    <option value="3">Prado</option>
                </select><br>


                <label><b>Nombre del chofer:</b></label>
                <select class="form-select" aria-label="Default select example">
    <option selected>Seleccione...</option>
    <option value="1">Juan</option>
                  </select><br>
                                 
                </div>
                <div class="form-group col">

                    <label><b>Área a la que pertenece la gira:</b></label>
                    <select class="form-select" aria-label="Default select example">
    <option selected>Seleccione...</option>
    <option value="1">Administrativa</option>
    <option value="2">Académica</option>
    <option value="3">Para-académica</option>
    <option value="4">Proyecto</option>
    <option value="4">Otra</option>
                </select><br>

                    <label><b>Numero de cedula de encargado de la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el numero de cedula..." name="cedula" required=""> <br>

                    <label><b>Numero de cedula de la persona acompañante:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el numero de cedula..." name="cedula" required=""> <br>

                    <label><b>Nombre del curso:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre del curso..." name="carrera" required=""> <br>

                    <label><b>Fecha de la gira:</b></label>
                    <input type="date" class="form-control" placeholder="Ingrese la fecha de la gira..." name="fecha" required=""> <br>
                    
                    <label><b>Requiere chofer:</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Sí
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            No
                        </label>
                    </div> 
                    <br>
                  
                    <div align="right"> 
            <input style = "width: 200px" type="submit" class="btn btn-dark btn-block" value="Guardar y Continuar" />
            </div>
                  
                                      
                </div>
              
            </div>
           
      
           

        </form>
        <br>
    </div>
    <br>


</body>

</html>