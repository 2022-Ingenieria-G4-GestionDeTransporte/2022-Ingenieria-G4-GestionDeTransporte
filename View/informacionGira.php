<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Gira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

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
    <h2>Informacion de Giras</h2>
    <div class="container my-3">
        <div class="row">
            <form>
                <label><b>Fecha de gira:</b></label>
                <input type="date" placeholder="Ingrese la fecha de la gira..." name="fecha" required=""> <br><br>

                <label><b>Encargado de la gira:</b></label>
                <input type="text" placeholder="Ingrese el Encargado de la gira..." name="encargado" required=""> <br><br>

                <label><b>Acompañante de la gira:</b></label>
                <input type="text" placeholder="Ingrese el acompañante de la gira..." name="acompanante" required=""> <br><br>

                <label><b>NRC y nombre del curso:</b></label>
                <input type="text" placeholder="Ingrese el NRC y nombre del curso..." name="NCR" required=""> <br><br>

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

                <label><b>Área a la que pertenece la gira:</b></label>
                <input type="text" placeholder="Ingrese el area de la gira..." name="area" required=""> <br><br>

                <label><b>Numero de cedula de encargado de la gira:</b></label>
                <input type="text" placeholder="Ingrese el numero de cedula..." name="cedula" required=""> <br><br>

                <label><b>Carrera o proyecto:</b></label>
                <input type="text" placeholder="Ingrese la Carrera o proyecto..." name="carrera" required=""> <br><br>

                <label><b>Tipo de Vehiculo:</b></label>
                <input type="text" placeholder="Ingrese el tipo de Vehiculo..." name="tipo" required=""> <br><br>

                <label><b>Nombre del chofer:</b></label>
                <input type="text" placeholder="Ingrese el nombre del chofer..." name="chofer" required=""> <br><br>

            </form>

        </div>

    </div>

    <input type="button" value="Modificar" />
    <a href="./DestinoInformacionGira.php">Ver más datos de gira</a>
    <input type="submit" value="Guardar y salir" />

</body>

</html>