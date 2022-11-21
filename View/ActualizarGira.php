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
<body style="background-color: #AA041B;"  class="body">
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
                <form method="post" enctype="multipart/form-data" action="../Business/LoginAction.php">
                            
                  <center><h2 class="" style= "">Actualizar Informacion Gira</h2></center></br>


     <table  border = '2' class="table">
  <thead>
    
  </thead>
  <tbody align="left">
    <tr>

      <td width='200'>
      <label><b>Nombre del lugar:</b></label>
    <input type="text" class="form-control" placeholder="Ingrese el nombre del lugar..." name="nombrelugar" required=""> <br>

</td>

<td  width='200'>
<label><b>Numero de telefono</b></label>
<input type="number" class="form-control" placeholder="Ingrese el numero de telefono..." name="numerotelefono" required=""> <br>
      
  </td>
 
    </tr>

    <tr>
      
          <td  width='200'>
          <label><b>Hora de llegada</b></label>
        <input type="time" class="form-control" name="horallegada" required=""> <br>
      
  </td>


  <td  width='200'>
        <label><b>Hora de Salida</b></label>
    <input type="time" class="form-control" name="horasalida" required=""> <br>
      
  </td>
  </tr>


  <tr>
      
      <td  width='200'>
      <label for="exampleFormControlInput1" class="form-label"><b>Chofer:</b></label>   
      <select class="form-select" aria-label="Default select example">
  <option selected>Seleccione Chofer!</option>
  <option value="1">Chofer1</option>
  <option value="2">Chofer2</option>
  <option value="3">Chofer3</option>
</select>

</td>

 <td  width='200'>
 <label><b>Observaciones</b></label>
        <textarea class="form-control" name="observaciones" placeholder="Observaciones" id="" cols="2" rows="3"></textarea> <br>    
</br>

  
</td>

</tr>


 
  </tbody>
</table>
                                    
              


                
                  <div align ="center" class="pt-0.1 mb-4">
                    <button class="btn btn-dark btn-block" name="login" id="login" type="submit">Actualizar</button>
                     

</form> 
</div><div align ="right">
<form action="/2022-Ingenieria-G4-GestionDeTransporte/View/PaginaPrincipalChofer.php">
        <input type="submit" class="btn btn-link btn-block" value="Pagina Principal" />
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
</body>
</html>
     
