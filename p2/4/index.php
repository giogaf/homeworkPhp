<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4</title>
</head>
<body>
	<h2>Operaciones unshift,push,splice</h2>
	<h3>Matriz original</h3>


	<?php

	$matriz[]=[1,2];
	$matriz[]=[3,4];

	ver_matriz($matriz);


	echo "<h3>Inserción al inicio</h3>";
	array_unshift($matriz, [-1,0]);
	ver_matriz($matriz);

	echo "<h3>Iserción al final</h3>";
	array_push($matriz,[5,6]);
	ver_matriz($matriz);
	echo "<h3>Eliminación de elemento</h3>";
	array_splice($matriz,1,1);	
	ver_matriz($matriz);
	function ver_matriz($matriz)
	{		
	foreach ($matriz as $key => $value) {
				foreach ($value as $k => $v) {
					echo $v. ",";					
				}
				echo "<br>";
	}

	}
	
	?>
</body>
</html>