<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itinerario Chofer</title>
    </link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <?php
    include '../Business/ItenerarioChoferBusiness.php';
    ?>
</head>
<style>
  thead th {
  color: #fff;
}
</style>
<center>
    <div style="background-color: #302E71">
        <br>
        <img src="../Images/LOGO-UNAHorizontal-BLANCO .png" alt="logo" width="200px">
        <h4 style="color: white">Sistema Gestión de Transportes</h4>
        <h5 style="color: white">Itinerario de Chofer</h5>
        <br>
    </div>
</center>
    <br><br>
<body class="body">
  <div class="container">
    <form action="./RegistroItinerarioChofer.php">
      <input type="submit" class="btn btn-success" value="Agregar Registro" name="insert">
    </form>
  </div>
  <br>
  <div class="container">
    <table border="2" class="table table-striped">
      <thead style="background-color: #302E71;">
        <tr>
          <th>Lugar Gira</th>
          <th>Fecha Salida SRHNC</th>
          <th>Fecha Llegada SRHNC</th>
          <th>Observaciones</th>
          <th>Modificar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody id="buscar">
        <?php
          $ItenerarioChoferBusiness = new ItenerarioChoferBusiness();
          $allItenerario = $ItenerarioChoferBusiness->getAllItenerarioChofer();
          foreach($allItenerario as $current){
            echo '<form method="post" enctype="multipart/form-data" action="../business/ItenerarioChoferAction.php">';
            echo '<tr>';
            echo '<input type="hidden" name="tbitenerariochoferid" value="' . $current->getItenerariochoferid() . '">';
            echo '<td><input type="text" readonly name="tbitenerariochoferlugar" id="tbitenerariochoferlugar" value="' . $current->getItenerariochoferlugar() . '"/></td>';
            echo '<td><input type="datetime" readonly name="tbitenerariochoferfechallegada" id="tbitenerariochoferfechallegada" value="' . $current->getItenerariochoferfechallegada() . '"/></td>';
            echo '<td><input type="datetime" readonly name="tbitenerariochoferfechasalida" id="tbitenerariochoferfechasalida" value="' . $current->getItenerariochoferfechasalida() . '"/></td>';
            echo '<td><input type="text" readonly name="tbitenerariochoferobservaciones" id="tbitenerariochoferobservaciones" value="' . $current->getItenerariochoferobservaciones() . '"/></td>';
            echo '<td><input type="submit" class="material-symbols-outlined" value="update" name="update" id="update"/></td>';
            echo '<td><button class="material-symbols-outlined" value="delete" onclick="">delete</button></td>';
            echo '</tr>';
            echo '</form>';
          }
        ?>
      </tbody>
    </table> 
    <br>
      <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
          <li class="page-item disabled">
              <a class="page-link">Anterior</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
              <a class="page-link" href="#">Siguiente</a>
          </li>
      </ul>
      </nav>
    </div>
    <br>
</form> 

<div class="container">
  <form form action="./PaginaPrincipalChoferView.php">
    <input type="submit" class="btn btn-secondary" value="Regresar" />
  </form>  
</div>
 
</div>
</body>
</html>