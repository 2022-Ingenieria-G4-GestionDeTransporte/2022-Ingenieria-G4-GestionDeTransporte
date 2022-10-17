<!DOCTYPE html>
<?php
error_reporting(0);
?>
<head>
<script src="../js/Function.js"></script>
    <title>Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="funciones.js"></script>
    <?php
    include '../business/LoginBusiness.php';
    ?>
</head>
<body class="bodylogin">
    <Center>
        <h1 class="rojo">Gestion de Transporte</h1>
        <div id="login-form-wrap">
            <form method="post" enctype="multipart/form-data" action="/2022-Ingenieria-G4-GestionDeTransporte/Business/LoginAction.php">
                <tr>
                <?php
                   echo '<td><input required type="text"  placeholder="Ingrese su cedula" name="cedula" id="cedula"/></td></br>';
                   echo '<td><input required type="text"  placeholder = "Ingrese su contraseña" name="password" id="password"/></td></br>';
                   echo '<td><input type="submit" value="Login" name="login" id="login"/></td></tr></br>';
                 ?>
                 </br>
                 <a href="https://www.nodefinido.com">Forgot Password?</a>.
                </form>

        </div>
        <br><br>
        <form method="post" enctype="multipart/form-data" action="../View/RegistrarFuncionario.php">
                <tr>
                <?php
                   echo '<td><input type="submit" value="Registrarse" name="registro" id="registro"/></td></tr></br>';
                 ?>
                 </br>
        </form>
    </Center>
    <br><br>
                   <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "dbError") {
                            echo '<center><p style="color: red">Acceso denegado, datos incorrectos!</p></center>';
                        }
                    }
                    ?>

</body>
</html>
