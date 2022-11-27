<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iteneraio Chofer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #AA041B;"  class="body">
<section class="vh-100" style="background-color: #AA041B;">
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
                  <center><h2 class="" style= "">Itenerario Chofer</h2></center></br>
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
        <label for="exampleFormControlInput1" class="form-label">Telefono:</label>
    <input type="number" class="form-control" id="telefono" placeholder="Ingrese telefono..."> 
  </td>
    </tr>
    <tr>
<td  width='200'>
    <label for="exampleFormControlInput1" class="form-label">Hora Inicio:</label>
    <input type="time" class="form-control" id="exampleFormControlInput1">
</td>
<td  width='200'>
    <label for="exampleFormControlInput1" class="form-label">Hora Fin:</label>
    <input type="time" class="form-control" id="exampleFormControlInput1">
</td>
<tr>
<td  colspan="2" width='200'>
        <label for="exampleFormControlInput1" class="form-label">Observaciones:</label>
        <textarea class="form-control" name="observaciones" placeholder="Observaciones" id="" cols="5" rows="3"></textarea> <br>
    </td>
</tr>
<tr>
  </tbody>
</table>
<button class="btn btn-dark btn-block" name="login" id="login" type="submit">Registrar</button>       
</form> 
        <form action="./PaginaPrincipalChoferView.php">
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