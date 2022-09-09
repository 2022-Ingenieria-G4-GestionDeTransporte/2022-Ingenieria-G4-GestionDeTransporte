<!DOCTYPE html>
<?php
error_reporting(0);
?>
    <head>
        <script src="../js/Function.js"></script>
        <title>Registrar Funcionario</title>
        <meta charset="UTF-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
           <form method="post" enctype="multipart/form-data" action="../business/RegistrarFuncionarioAction.php">
                <tr>
                <h1>Registro</h1>
                <p>Por favor ingrese los datos!!!</p>
                <?php
                   echo'<label><b>Cédula:</b></label>';
                   echo '<td><input required type="text"  placeholder="Ingrese su cedula" name="cedula" id="cedula"/></td></br>';
                   echo'<label><b>Nombre:</b></label>';
                   echo '<td><input required type="text"  placeholder = "Ingrese su nombre" name="nombre" id="nombre"/></td></br>';
                   echo'<label><b>Apellidos:</b></label>';
                   echo '<td><input required type="text"  placeholder = "Ingrese sus apellidos" name="apellidos" id="apellidos"/></td></br>';
                   echo'<label><b>Password:</b></label>';
                   echo '<td><input required type="text"  placeholder = "Ingrese su contraseña" name="password" id="password"/></td></br>';
                   echo '<td><input type="submit" value="Registrarse" name="registro" id="registro"/></td></tr></br>';
                 ?>
                 </br>
                </form>
        
    </body>
</html>
