<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="div1"> 
        <form th:action="" th:object="" method="post">

            <h1>Informacion de Giras</h1>
            
            <label><b>Fecha de gira:</b></label>
            <input type="date" placeholder="Ingrese la fecha de la gira..." name="fecha" required=""> <br><br>

            <label><b>Encargado de la gira:</b></label>
            <input type="text" placeholder="Ingrese el Encargado de la gira..." name="encargado" required=""> <br><br>

            <label><b>Acompañante de la gira:</b></label>
            <input type="text" placeholder="Ingrese el acompañante de la gira..." name="acompanante" required=""> <br><br>
            
           <label><b>NRC y nombre del curso:</b></label>
            <input type="text" placeholder="Ingrese el NRC y nombre del curso..." name="NCR" required=""> <br><br>
            
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
            
            <label><input type="checkbox" id="cbox1" value="first_checkbox">Sí</label><br>
            <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">No</label>

            
        </form>
        </div>
        <Center>
        <div>
            <h2>Informacion de participantes de gira</h2>
            <table class = "separado">
                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Carrera</th>
                    <th>Institución</th>
                </tr>
                <tr>
                    <td>702880773</td>
                    <td>Kendall</td>
                    <td>Ortega</td>
                    <td>Ingeniería en Sistemas</td>
                    <td>Universidad Nacional</td>
                </tr>
            </table>
        </div>
        </Center>
        <input type="button" value="Modificar"/>
        <a href="./DestinoInformacionGira.php">Ver más datos de gira</a>
            <input type="submit" value="Guardar y salir"/>

</body>
</html>