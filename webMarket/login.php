<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>webMarket - Iniciar sesión</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<?php include("layout_header.php");?>
		<section class="contenedor">
			<div class="formulario">
				<form action="_iniciar.php" method="POST">
					<h3>Inicia sesión</h3>
					<input type="text" name="correo" placeholder="Correo electrónico">
					<input type="password" name="contraseña" placeholder="Contraseña">
					<button type="submit" name="iniSes">Iniciar sesión</button>
				</form>
			</div>
			<div id="cuenta">
				<label>¿Aún no tienes cuenta? <a href="signup.php">Crear cuenta</a></label>
			</div>
		</section>
	</body>
</html>