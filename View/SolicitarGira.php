<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
    <h1><img  src="logo.png" height = "85px" width = "100px" alt=""> Solicitud De Gira</h1>
    
    <?php
   // include '../business/FuncionarioBusiness.php';
   error_reporting(0);
    ?>
    <script src="../js/Function.js"></script>
    <link rel = "stylesheet" href="css/style.css" type = "text/css"></link>

</head>
<body> 
<header>  
<nav>  
<ul>  
<li>  
<a href="/2022-Ingenieria-G4-GestionDeTransporte/View/SolicitudDeGira.php"> Solicitud de Gira </a>  
</li>  
<li>  
<a href="/2022-Ingenieria-G4-GestionDeTransporte/View/DestinoGira.php"> Destino Gira </a>  
</li>  
<li>  
<a href="/2022-Ingenieria-G4-GestionDeTransporte/View/ItinerarioGira.php"> Itinerario Gira </a>  
</li>  
<li> 
<a href="/2022-Ingenieria-G4-GestionDeTransporte/View/RegistroParticipanteGira.php"> Registro Participantes De La Gira </a>  
</li>   
</ul>  
</nav>  
</header>

   <form action="/2022-Ingenieria-G4-GestionDeTransporte/View/PaginaPrincipalSolicitante.php">
        <input type="submit" value="Pagina Principal" />
        <div id="contenedor"></div>
    </form>

</body>
</html>
