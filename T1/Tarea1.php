<?php
/* Las instrucciones PHP son las que aparecen en rojo.
   Las etiquetas en azul intenso son el código HTML.
   Todo lo que aparece en este color son líneas de comentario
   de las que hablaremos más adelante
   Cuando reescribas estos primeros scripts
   bastará que incluyas las instrucciones escritas en rojo */

/* ponemos <br> al final del texto para que cuando se
   ejecute cada una de las instrucciones echos 
   se escriba -además- un salto de linea HTML
   de este modo, el resultado de cada ECHO
   aparecerá en una línea diferente */

# aquí utilizamos solo unas comillas
print_r("Este texto solo lleva las comillas de la instrucción<br>"); 
# aquí anidaremos comillas de distinto tipo
print_r("La palabra 'comillas' aparecerá entrecomillada<br>"); 
# esta es otra posibilidad invirtiendo el orden de las comillas
print_r('La palabra "comillas" aparecerá entrecomillada<br>');
# una tercera posibilidad en la que utilizamos un mismo
# tipo de comillas. Para diferenciar unas de otras anteponemos
# la barra invertida, pero esta opción no podríamos utilizarla
# al revés. 
# No podríamos poner \" el las comillas exteriores.
print_r("La palabra \"comillas\" usando la barra invertida<br>");
//Imprimiendo varias cadenas
print_r('Hola',' ','Hola de nuevo');

print_r("print_r() muestra información sobre una variable en una forma que es legible por humanos. Mientras que echo Muestra todos los parámetros. 
No se pospone ninguna nueva línea adicional.")
?>