<?php
  $cnx=new mysqli("bieufnb9q4nm3ycv7pev-mysql.services.clever-cloud.com","uqmenxiqp1q1rptn","cPbUEOil6BA6lSF8YrVQ","bieufnb9q4nm3ycv7pev");
 
  if ($cnx->connect_errno) {
    printf("Conexión fallida: %s\n", $cnx->connect_error);
    exit();
}
$consulta = "SELECT * FROM participantes ORDER by puntaje DESC ";

if ($resultado = $cnx->query($consulta)) {
  
 echo '<table class=" table-hover table-responsive table table-striped">';
 echo '<tr>';
 echo '<th>Ficha</th>';
 echo '<th>Participante 1</th>';
 echo '<th>Participante 2</th>';
 echo '<th>Enlace</th>';
 echo '<th>Puntaje</th>';
 echo '</tr>';

    /* obtener un array asociativo */
    while ($fila = $resultado->fetch_object()) {
      echo '<tr>';
      echo '<td>'.$fila->ficha.'</td>';
      echo '<td>'.$fila->aprendiz_1.'</td>';
      echo '<td>'.$fila->aprendiz_2.'</td>';
      echo '<td>'.$fila->enlace_meet.'</td>';
      echo '<td>'.strval($fila->Puntaje).'</td>';
      echo '</tr>';
    }

    /* liberar el conjunto de resultados */
    $resultado->free();
    echo '</table>';
}

/* cerrar la conexión */
$cnx->close();
?>