<?php
    $a=12; //en binario 1100;
    $b=23; //en binario 10111;
    $A="12"; //en binario 110001110010;
    $B="23"; //en binario 110010110011;
    //operador &;
    print_r($a&$b);
    echo "<br>";
    print_r($A&$B);
    echo "<br>";
    //operador |;
    print_r($a|$b);
    echo "<br>";
    print_r($A|$B);
    echo "<br>";
    //operador ^;
    print_r($a^$b);
    print_r($A^$B);
    echo "<br>";
    //repite el código para el operador <<;
    echo "<br>";
    print_r($A<<$B);
    //repite el código para el operador >>;
    echo "<br>";
    print_r($A>>$B);

    echo "<br>";
    echo "El operador << divide el valor de la primera cadena por 2 elevado al valor de la segunda.";
    echo "<br>";
    echo "Al ser un operador matemático solo tiene sentido cuando ambas variables son números naturales.";
    echo "<br>";
    echo "En las cadenas alfanuméricas extrae los números que pudiera haber al comienzo y, en caso de no haberlos, toma valor cero.";
    echo "<br>";

    //operador ~
    print_r(~$a);
    echo "Invierte los valores de los bits de la cadena \$a convirtiendo los ceros en unos y los unos en ceros.";

?>