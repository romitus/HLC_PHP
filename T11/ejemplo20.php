<? 
#  rellenamos el array desde [0][0] hasta [0][4]
# la insercion automatica haria que este primero fuera [0][0]

$a[][]=" ";
# ahora pondremos cero como indice del primer array y dejemos que PHP
# nos vaya insertando automaticamente el segundo

$a[0][]="3-2";$a[0][]="5-3";$a[0][]="7-1";$a[0][]="0-2";

#ahora desde [1][0] hasta [1][4]
#este primero lo dejamos como autom�tico en ambos indices
# de esta forma el primero tomar� valor uno (siguiente al anterior)
# de forma autom�tica
$a[][]="0-11";
# repetimos el proceso anterior
$a[1][]=" ";$a[1][]="2-1";$a[1][]="1-0";$a[1][]="1-2";
# y repetimos de nuevo, ahora crearia 2 como primer indice
$a[][]="0-0";
#insertariamos los restantes valores de indice 2
$a[2][]="1-3";$a[2][]=" ";$a[2][]="1-4";$a[2][]="2-0";
# nuevo incremento del primer indice
$a[][]="1-0";
# rellenamos 
$a[3][]="6-3";$a[3][]="14-3 ";$a[3][]=" ";$a[3][]="1-0";
# nuevo y ultimo incremento de primer indice
$a[][]="1-1";
# rellenamos de nuevo
$a[4][]="2-3";$a[4][]="0-1 ";$a[4][]="1-1";$a[3][]="";

# como ver�s el proceso no tiene complicaciones, pero ... pesadillo si es
# �verdad que si tuvi�ramos una base de datos ser�a m�s f�cil?
# estamos en ello, todo se andar�...

# tendr�amos que ver esos valores pero.. escribir "a mano"
# una tabla puede ser una tortura, as� que mejor introducimos
# una bucle, otro recurso que estudiaremos pronto
# para esa labor repetitiva de mostrar en una tabla  
# todos los datos del array

# Ser�a algo como esto
# creamos la etiqueta de apertura de una tabla

print ("<TABLE BORDER=2>");
# ahora dos bucles anidados (rojo uno, magenta el otro)
# para rellenar las celdas de cada fila (el magenta)
# y para insertar las etiquetas <TR> utilizaremos el rojo

for ($i=0;$i<5;$i++){
	print("<tr>");
	 for($j=0;$j<5;$j++) {
			print("<td>".$a[$i][$j]."</td>");
	 }
}

#ponemos la etiqueta de cierre de la tabla

print("</table>");
?>

