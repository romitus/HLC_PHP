<?php

  
  # Conexión a la base de datos
  $conn = mysqli_connect( 'localhost', 'test', 'test', 'pruebas');
  echo "<pre>";
  print_r($conn);
  
  # Sentencia para insertar registros en la base de datos
  $insert = "insert into users( name, email) values( 'Carlos', 'alum.cmunozi@iesalixar.org')";

  # Instrucción que ejecuta el insert anterior en la base de datos PRUEBAS
  $return = mysqli_query ( $conn, $insert);

  # Mostramos por pantalla el resultado del insert
  print_r( ( $return));

  # Cerramos conexión
  mysqli_close( $conn);
  ?>