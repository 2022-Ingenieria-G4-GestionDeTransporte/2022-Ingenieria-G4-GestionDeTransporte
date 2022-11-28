<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Itinerario Chofer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #302E71;"  class="body">
<section class="vh-100" style="background-color: #302E71;">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../Images/Login.jpg" 
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form method="post" enctype="multipart/form-data" action="">     
                  <center><h2 class="" style= ""> Registro Itinerario Chofer</h2></center></br>
     <table  border = '2' class="table">
  <thead>
    
  </thead>
  <tbody align="left">
    <tr>

      <td width='200'>
        <label for="exampleFormControlInput1" class="form-label">Nombre Lugar:</label>
    <input type="text" class="form-control" id="nombrelugar" placeholder="Ingrese el nombre del lugar..."> 

        </td>
        <td  width='200'>
        <label for="exampleFormControlInput1" class="form-label">Fecha Salida:</label>
    <input type="datetime-local" class="form-control" id="fechasalida"> 
  </td>
    </tr>
    <tr>
<td  width='200'>
    <label for="exampleFormControlInput1" class="form-label">Fecha Llegada:</label>
    <input type="datetime-local" class="form-control" id="fechallegada">
</td>
<td  width='200' colspan="3">
    <label for="exampleFormControlInput1" class="form-label">Observaciones:</label>
    <textarea class="form-control" name="observaciones" placeholder="Observaciones" id="" cols="5" rows="3"></textarea> <br>
</td>
  </tbody>
</table>
<button class="btn btn-dark btn-block" name="login" id="login" type="submit">Registrar</button>    
<br>   
</form> 
        <form action="./ItenerarioChoferView.php">
        <input type="submit" class="btn btn-link btn-block" value="Regresar" />
        </form>   
</div>


                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>