<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5</title>

</head>
<body>
	<?php
	for ($i=1; $i <13 ; $i++) { 
		$arreglo[]=is_numeric($_POST[strval($i)]) ? $_POST[strval($i)]: null;
	}
	for ($i=0; $i <12 ; $i++) { 	
		if(($arreglo[$i] % 2) == 0)
		{
			$pares[]=$arreglo[$i];
		}
		else
		{
			$impares[]=$arreglo[$i];
		}
	}
	?>
	<h3>Arreglo A (Pares)</h3>

	<?php
	for ($i=0; $i <count($pares) ; $i++) { 
		echo $pares[$i].",";
	}

	?>
	<h3>Arreglo B (Impares)</h3>

	<?php
	for ($i=0; $i <count($impares) ; $i++) { 
		echo $impares[$i].",";
	}

	?>	
</body>
</html>


