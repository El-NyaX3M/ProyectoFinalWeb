<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>webMarket - Inicio</title>
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include("layout_header.php");?>
		<section> 
			<div id="banner">
				<img src="images/banner.png">
			</div>
			<div id="productos">
				<?php include("php/_mostrarproductos.php");?>
			</div>
			<script type="text/javascript" src="js/main-scripts.js"></script>
		</section>
	</body>
</html>