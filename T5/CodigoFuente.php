<HTML>
<HEAD>
</HEAD>
<BODY>
<? 
# La constante del sistema __FILE__ nos devolver� 

	echo "La ruta completa de este fichero es: ";
	echo __FILE__;

# La constante del sistema __LINE__ nos devolver� 
# el n�mero de l�nea que se est� interpretando
# tambi�n cuenta las l�neas en blanco
# cuenta las l�neas y ver�s que devuelve ... 16

echo "<br>Esta es la l�nea: ",__LINE__, "del fichero";
echo "<br>Estamos utilizando la versi�n: ",PHP_VERSION, " de PHP";
echo "<br>El PHP se est� ejecutando desde el sistema operativo: ",PHP_OS;

?>

</BODY>
</HTML>
