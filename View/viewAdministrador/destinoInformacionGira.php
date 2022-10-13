<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id = "fondo">
            <h1>Destino e Itinerario de Gira</h1>
            <br>
            <table class = "separado">
                <tr>
                    <th>Destino (Provincia, Canton, Distrito)</th>
                    <th>Hospedaje</th>
                    <th>Fecha</th>
                    <th>Actividad</th>
                    <th>Hora de inicio/Hora de finalización</th>
                    <th>Salida SRHNC</th>
                    <th>Entrada SRHNC</th>
                </tr>
                <tr th:each="">
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                    <td th:text=""></td>
                </tr>
            </table>
            <input type="submit" value="Regresar"/>
            </br>

        </div>
</body>
</html>