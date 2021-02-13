<?php
$filas = 1;
$columnas = 6;


# insertemos la etiqueta de apertura de la tabla
print ("<table border=2 width=400 align=center>");
for ($i=0; $i < $filas; $i++) { 
    echo "<tr>";
    for ($f=0; $f < $columnas; $f++) { 
        echo "<td>";
		print rand(1,49);
		print ("</td>");
        
    }
    echo "</tr>";   
}
    echo"</table>"; 
?>
