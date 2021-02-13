<?php

$langosta=60;
$angula=80;
$caviar=560;

echo "Precio langosta= " . $langosta . " €";
echo "Precio angula= " . $angula . " €";
echo "Precio caviar= " . $caviar . " €";


if($langosta>50 and $angula>70) {

		echo "VERDADERO";
		
	}else if($langosta>50 and $caviar>500){

			echo "VERDADERO";	
	
		}else if ($angula>70 and $caviar>500){

			echo "VERDADERO";
		}else {

			echo "FALSO";
		}	

	

	

?>