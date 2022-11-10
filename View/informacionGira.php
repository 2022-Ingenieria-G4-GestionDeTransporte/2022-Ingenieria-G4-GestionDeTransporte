<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Gira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<img src="../Images/UNA-transparente.png" class="img-thumbnail" style="float:right" width="155" height="150">
<h3>Sistema Gestión de Transportes</h3>
<h5>Información General de la Gira</h5>
<br>


<body>

    <ul class="nav nav-pills" style="background-color: #302E71">
        <li class="nav-item">
            <a class="nav-link" style="color: white" aria-current="page" href="./visualizarGiras.php">Regresar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="color: white" aria-current="page" href="./informacionGira.php">Información Básica</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" href="./participantesGira.php">Participantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: white" aria-current="page" href="./destinoInformacionGira.php">Destino e Itinerario</a>
        </li>
    </ul>
    <br>
    <div class="container px-4">
        <form>
            <div class="row">
                <div class="form-group col">
                    <label><b>Fecha de gira:</b></label>
                    <input type="date" class="form-control" placeholder="Ingrese la fecha de la gira..." name="fecha" required=""> <br>

                    <label><b>Encargado de la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el Encargado de la gira..." name="encargado" required=""> <br>

                    <label><b>Acompañante de la gira:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el acompañante de la gira..." name="acompanante" required=""> <br>

                    <label><b>NRC y nombre del curso:</b></label>
                    <input type="text" class="form-control" placeholder="Ingrese el NRC y nombre del curso..." name="NCR" required=""> <br>

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
                </div>
                <div class="form-group col">
                <label><b>Área a la que pertenece la gira:</b></label>
                <input type="text" class="form-control" placeholder="Ingrese el area de la gira..." name="area" required=""> <br>

                <label><b>Numero de cedula de encargado de la gira:</b></label>
                <input type="text" class="form-control" placeholder="Ingrese el numero de cedula..." name="cedula" required=""> <br>

                <label><b>Carrera o proyecto:</b></label>
                <input type="text" class="form-control" placeholder="Ingrese la Carrera o proyecto..." name="carrera" required=""> <br>

                <label><b>Tipo de Vehiculo:</b></label>
                <input type="text" class="form-control" placeholder="Ingrese el tipo de Vehiculo..." name="tipo" required=""> <br>

                <label><b>Nombre del chofer:</b></label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre del chofer..." name="chofer" required=""> <br>

                </div>

            </div>
        </form>
        <br>
        
    <input type="submit" value="Actualizar y Guardar" />
    </div>
    <br>


</body>

</html>