<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Gira</title>
    </link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <img src="../Images/UNA-transparente.png" class="img-thumbnail" style="float:right" width="155" height="150">
        <h3>Sistema Gestión de Transportes</h3>
        <h5>Actualizar Informacion de Gira</h5>
        <br>        
    </header>
    <center>
        <div class="container px-4">
            <form>
                <div class="row">
                        
                        <label><b>Nombre del lugar</b></label>
                        <input type="text" class="form-control" placeholder="Ingrese el nombre del lugar..." name="nombrelugar" required=""> <br>

                        <label><b>Numero de telefono</b></label>
                        <input type="number" class="form-control" placeholder="Ingrese el numero de telefono..." name="numerotelefono" required=""> <br>
                        
                        <div class="col">
                            <label><b>Hora de llegada</b></label>
                            <input type="time" class="form-control" name="horallegada" required=""> <br>
                        </div>

                        <div class="col">
                            <label><b>Hora de Salida</b></label>
                            <input type="time" class="form-control" name="horasalida" required=""> <br>
                        </div>

                        <label><b>Seleccione chofer</b></label>
                        <select class="form-select">
                            <option>Chofer1</option>
                            <option>Chofer2</option>
                        </select>
                        <br>
                        <br>
                        
                        <label><b>Observacion</b></label>
                        <textarea class="form-control" name="observaciones" placeholder="Observaciones" id="" cols="2" rows="2"></textarea> <br>
                 
                </div>
            </form>
            <br>
            <input type="submit" value="Actualizar y Guardar" />
        </div>    
    </center>
</body>
</html>
     
