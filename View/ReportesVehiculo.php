<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes Vehiculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    include '../Business/VehiculoBusiness.php';
    ?>
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
                  <center><h2 class="" style= "">Reportes Vehiculo</h2></center></br>
     <table  border = '2' class="table">
  <thead>
    
  </thead>
  <tbody align="left">
  </tbody>
</table>
<button class="btn btn-dark btn-block" name="login" id="login" type="submit">Registrar</button>    
<br>   
</form> 
        <form action="./PaginaPrincipalChoferView.php">
        <input type="submit" class="btn btn-link btn-block" value="Regresar" />
        </form>   
        <th></th>
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