<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizar Gira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<div>
<img src="../Images/UNA-transparente.png" class="mx-auto d-block" width="250" height="150">
<br>
</div>

<Center>
    <h3>Espacio exclusivo para Uso Administrativo</h3>
    <h4>Aprobar o denegar gira</h4>
</Center>

<body style="background-color: #e5e5e5;">
    <div class="container">
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Gira Aprobada
                </label>
            </div>
        </div>
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                    Gira Denegada
                </label>
            </div>
        </div>
        <div class="col">
            <label>Observaciones:</label>
            <textarea class="form-control" rows="5" cols="50" id="comment" name="text"></textarea>
        </div>
        <br>
        <form method="post" action="../business/GiraAction.php">
        <input type="submit" name="back" id="back" value="Regresar y Guardar" />
        </form>
        </br>

    </div>
</body>

</html>