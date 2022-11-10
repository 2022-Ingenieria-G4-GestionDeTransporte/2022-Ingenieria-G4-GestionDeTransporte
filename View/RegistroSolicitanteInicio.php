<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registro de Solicitantes</title> 
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
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="../Images/Login.jpg" 
                                         alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <form method="post" enctype="multipart/form-data" action="../Business/LoginAction.php">

                                            <h2 class="" style= ""> Registro Solicitante</h2></center></br>
                                            <table class="table">
                                                <thead>
                                                </thead>
                                                <tbody align="left">
                                                    <tr>
                                                        <td width='200'>
                                                            <label class="form-label">Nombre:</label>
                                                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre..."> 
                                                        </td>
                                                        <td  width='200'>
                                                            <label class="form-label">Apellido:</label>
                                                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su apellido..."> 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td  colspan="2" width='200'>
                                                            <label class="form-label">Correo:</label>
                                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="@ejemplo.com">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td  width='200'>
                                                            <label class="form-label">Cédula:</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su cédula...">
                                                        </td>
                                                        <td  width='200'>
                                                            <label class="form-label">Cargo:</label>
                                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su cargo...">
                                                        </td>
                                                    <tr>
                                                        <td>
                                                            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" enabled>
                                                            <label class="form-check-label" for="disabledFieldsetCheck">
                                                                Licencia de Conducir
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" enabled>
                                                            <label class="form-check-label" for="disabledFieldsetCheck">
                                                                Licencia del Campus
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="form-label">Fecha de Vencimiento:</label>
                                                            <input type="date" class="form-control" id="exampleFormControlInput1">
                                                        </td>
                                                        <td>
                                                            <label class="form-label">Código Licencia:</label>
                                                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese código licencia..."> 
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div align ="left" class="pt-0.1 mb-4">
                                                <button class="btn btn-dark btn-block" name="login" id="login" type="submit">Registrarse</button>
                                        </form> 
                                    </div>
                                    <div align ="left">
                                        <form action="/2022-Ingenieria-G4-GestionDeTransporte/Index.php">
                                            <input type="submit" class="btn btn-dark btn-block" value="Regresar" />
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

