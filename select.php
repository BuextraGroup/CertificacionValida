<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento Válido</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="logo.png">
    
</head>
<body>

<!--Inicio menú-->

<nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="" width="150" height="90">
      </a>
    </div>
  </nav>

<!--Fin menú-->

<h1> CERTIFICADO VÁLIDO </h1>

    <div class= "cuerpo">

<?php
if(isset($_POST['Seleccionar']));
  include("conexion.php");
  $folio = $_POST['folio'];  
  $resultados = mysqli_query($conexion, "SELECT * FROM  certificado WHERE cer_folio = '$folio'");
    while($consulta = mysqli_fetch_array($resultados))
    {
      echo "<b>Nombre: </b>".$consulta['cer_nombre'];
      echo '<br>';
      echo "<b>Folio: </b>".$consulta['cer_folio'];
      echo '<br>';
      echo "<b>Certificación: </b>".$consulta['cer_tipo'];
      echo '<br>';
      echo "<b>Fecha de certificación: </b>".$consulta['cer_fecha_certificacion'];
      echo '<br>';
      echo "<b>Vigencia: </b>".$consulta['cer_vigencia'];
      echo '<br>';
    }

?>
    </div>

<!--Footer-->
<div class= "footer">
    <img src="council.png" class="footer" alt="..." height="200" width="350">
</div>

<!--Fin del footer-->

</body>
</html>
