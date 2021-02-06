<?php
// Este comentario no se verá en la página
echo "Esto se leerá <BR> "; // Esto no se leerá
/* Este es un comentario de
múltiples líneas y no se acabará
hasta que no cerremos así.... */
echo "Este es el segundo comentario que se leerá<BR>";
# Este es un comentario tipo shell que tampoco se leerá
# Este, tampoco
echo ("Aquí el tercer texto visible<BR"); #comentario invisible
/* Cuidado con anidar
/* comentarios
multilinea con estos
al PHP no le gustan */
//print no es realmente una función (es un constructor de lenguaje) por lo tanto no es necesario usar paréntesis para indicar su lista de argumentos.
print "Estamos usando print";
/*print_r() muestra información sobre una variable en una forma que es legible 
por humanos.*/ */
print_r("Estamos usando print_r");
#Mientras que echo Muestra todos los parámetros. No se pospone ninguna nueva línea adicional.
echo("Estamos usando echo");
?>