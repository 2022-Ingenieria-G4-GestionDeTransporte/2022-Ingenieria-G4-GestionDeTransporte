<!DOCTYPE html>
<?php
error_reporting(0);
?>
<head>
<script src="../js/Function.js"></script>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="funciones.js"></script>
    <?php
    include '../business/LoginBusiness.php';
    ?>
</head>
<body style="background-color: #AA041B;"  class="body">
<section class="vh-100" >
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../Images/registros.png" 
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" enctype="multipart/form-data" action="../Business/LoginAction.php">

                  <div class="d-flex align-items-center mb-1 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    
                    <span align="center" class="h1 fw-bold mb-0">  Universidad Nacional De Costa Rica</span>
                  </div>
                  
                  <center><h5 class="h5 fw-bold mb-0">Sistema Gestión de Transporte</h5></center></br>
                  
                  <h5 align="center"  class="fw-normal mb-3 pb-2" style="letter-spacing: 1px;">Ingrese sus datos</h5>

                  <div align="center"  class="form-outline mb-4">
                  <label  class="form-label" for="cedula">Cédula:</label>
                    <input type="text" name = "cedula" id="cedula" required placeholder = "                        Ingrese su cédula" class="form-control form-control-lg" />
                    
                  </div>

                  <div align="center"  class="form-outline mb-4">
                  <label class="form-label" for="password">Contraseña:</label>
                    <input type="password" name = "password" id="password" required placeholder = "                   Ingrese su contraseña " class="form-control form-control-lg" />
                    
                  </div>

                  <div align="center" class="pt-0.1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" name="login" id="login" type="submit">Ingresar</button>
                  </div>

                  <div align="center">
                  <a class="small text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes una cuenta? 
                  <a href="/2022-Ingenieria-G4-GestionDeTransporte/View/RegistroSolicitanteInicio.php" style="color: #393f81;">Regístrese aquí</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
</div>
                </form>

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
