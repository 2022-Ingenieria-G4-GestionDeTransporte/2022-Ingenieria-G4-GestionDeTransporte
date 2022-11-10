<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro de chofer</title> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
</head>
  <body style="background-color: #AA041B;"  class="body">
<section class="vh-100" style="background-color: #AA041B;">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card" style="border-radius: 1rem;">
        </br></br></br></br>
                  <div class="row g-0">


             <div style="margin-top:60px; width:376px; height:470px" class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../Images/FondoU.webp" 
                alt="login form" class="img-fluid"  style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form method="post" enctype="multipart/form-data" action="../Business/LoginAction.php">
                  <center><h2 class="" style="margin-top:-120px"> Registro Choferes</h2></center></br>


     <table  border = '2' class="table">
  <thead>
    
  </thead>
  <tbody align="left">
    <tr>

      <td width='200'>
        <label for="exampleFormControlInput1" class="form-label">Cédula:</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su cédula..."> 

</td>
 
    </tr>

    <tr>
      
          <td  width='200'>
        <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre..."> 
      
  </td>

  </tr>


  <tr>
      
      <td  width='200'>
    <label for="exampleFormControlInput1" class="form-label">Contraseña:</label>
<input type="text" class="form-control" id="nombre" placeholder="Ingrese su contraseña..."> 
  
</td>

</tr>


  <tr>
    <td>
   
       <label for="exampleFormControlInput1" class="form-label">Vencimiento de Licencia:</label>
        <input type="date" class="form-control" id="exampleFormControlInput1">
      
        </td>


        </tr>

  </tbody>
</table>
                                    
              


                
                  <div align ="center" class="pt-0.1 mb-4">
                    <button class="btn btn-dark btn-block" name="login" id="login" type="submit">Registrar</button>
                 
                  
                  

</form> 
</div><div align ="right">
<form action="/2022-Ingenieria-G4-GestionDeTransporte/View/VisualizarSolicitantes.php">
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




</html>

