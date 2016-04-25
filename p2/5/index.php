<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 5</title>
	<link rel="stylesheet" href="">
	<script  src=""></script>
</head>
<body>
<h2>Clasificación pares-impares</h2>
	<form action="5.php" method="post">
			<?php
		for ($i=1; $i < 13; $i++) { 
			echo "<label>Ingrese número ".$i.":</label>";		
			echo "<input type='text' name='".$i."'/><br>";		
		}

		?>
		<input type="submit"/>
	</form>
	
</body>
</html>
<?php
//echo phpinfo();
