<?php
$variable1 = 5;
echo("Este es el valor de  variable1 ".$variable1."<br>");
$variable1 = 8;

echo("Este es el valor de la segunda variable, variable1 ".$variable1."<br>");
tarea4();
echo("Este es el valor de la segunda variable de arriba, variable1 ".$variable1."<br>");

function tarea4(){
    $variable1 = 10;
    echo("Este es el valor de variable1 dentro de la funcion ".$variable1."<br>");
}

?>
