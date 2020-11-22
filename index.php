<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Maratón de programación CBC</title>
</head>
<body>
  <div id="principal">

    <div id="encabezado">
      <div id="dfoto">
         <img id="foto" src="img.jpg" width="200" height="250" >
      </div>
      <div id="txtencabezado">
        <h2>Maratón de programación 2020</h2>
        <h4>Centro Biotecnológico del Caribe</h4>
      </div>
    </div>

    <div id="seccion">
     <?php
      include('controlador.php');
     ?>
    </div>
    <div id="footer"> 
      Copyright 2020
    </div>
  </div>
</body>
</html>