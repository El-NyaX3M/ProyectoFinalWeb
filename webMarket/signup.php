<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>webMarket - Crear cuenta</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<?php include("layout_header.php");?>
		<section class="contenedor">
			<div class="formulario">
				<form action="php/regis.php" method="POST">
					<h3>Registro</h3>
					<input type="text" name="nombre" placeholder="Nombre">
					<input type="text" name="primerA" placeholder="Primer apellido">
					<input type="text" name="segundoA" placeholder="Segundo apellido">
					<input type="text" name="correo" placeholder="Correo electrónico">
					<input type="password" name="contraseña" placeholder="Contraseña">
					<input type="password" name="confContra" placeholder="Confirmar contraseña">
					<button type="submit" name="regis">Registrarse</button>
				</form>
			</div>
			<div id="cuenta">
				<label>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></label>
			</div>
		</section>
	</body>
</html>