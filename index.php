<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio01</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="diseño.css">
</head>
<body>

	<form action="" method="post"> 
		
		<p>
			<input type="text" name="nombre" placeholder="Ingrese su nombre" size="40" class="ingreso">
		</p>

		<p>
			<input type="text" name="dirección" placeholder="Ingrese su dirección" size="40" class="ingreso">
		</p>

		<p>
			<input type="text" name="nomProducto" placeholder="Ingrese el nombre del producto" size="40" class="ingreso">
		</p>

		<p>
			<select name="producto" required>
				<option value="">Seleccione el tipo de producto</option>
				<option value="abarrotes">abarrotes</option>
				<option value="limpieza">limpieza</option>
				<option value="otros">otros</option>
			</select>
			
		</p>

		<p>
			<input type="text" name="precio" placeholder="Ingrese el precio unitario" size="40" required="true" class="ingreso">
		</p>

		<p>
			<input type="number" name="cantidad" placeholder="Ingrese la cantidad" size="40" required="true" class="ingreso">
		</p>

		<p>
			<input type="submit" name="submit" value="calcular" size="20" id="boton">
		</p>
		
		
	</form>

	<?php


	if (isset($_POST['submit'])){
		
	error_reporting(0);
		
		$precio=$_POST['precio'];
		$cantidad=$_POST['cantidad'];
		$tipo=$_POST['producto'];
		$desc=0;

		$importe=$precio*$cantidad;

		if ($tipo='abarrotes') {
			if ($cantidad<=6) {
				$desc=$importe*0.05;
			}else{
				$desc=$importe*0.08;
			}
		}else if ($tipo='limpieza'){
			if ($cantidad<=6) {
				$desc=$importe*0.07;
			}else{
				$desc=$importe*0.10;
			}
		}else if ($tipo='juguetes'){
			if ($cantidad<=6) {
				$desc=$importe*0.10;
			}else{
				$desc=$importe*0.13;
			}
		}else if ($tipo='otros'){
			if ($cantidad<=6) {
				$desc=$importe*0.12;
			}else{
				$desc=$importe*0.15;
			}

		}

		$preciofinal=$importe-$desc;
		echo "<br>El importe de la compra es S/ ".$importe;
		echo "<br>El importe del descuento es S/ ".$desc;
		echo "<br> El importe a pagar es S/ ".$preciofinal;
	}
	?>

</body>
</html>