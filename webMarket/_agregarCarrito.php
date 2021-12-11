<?php
	require_once('php/conexion.php');

	if (isset($_POST['agregar'])) {
		if(isset($_COOKIE['logged'])){
			$idusu=$_COOKIE['logged'];
			$idprod = $_POST['id'];
			$img = $_POST["rutaimg"];
			$nom = $_POST["nombre"];
			$precio = $_POST["precio"];
			$descrip = $_POST["descrip"];
			$sql = "INSERT INTO Carro (idProd,idUsu,nombreProd,descrip,precio,rutaimg) VALUES('$idprod','$idusu','$nom','$descrip','$precio','$img')";
			if(!mysqli_query($con,$sql)){
				echo "<script>
		                alert('Ha ocurrido un error al intentar agregar el producto al carrito.');
		                window.location= 'index.php'
		   				 </script>";
			}
			else{
				echo "<script>
	            alert('El producto ha sido agregado al carrito.');
	            window.location= 'carrito.php'
	   			</script>";
			}
		}
		else{
			echo "<script>
	        alert('Para agregar productos al carrito, primero inicie sesión.');
	        window.location= 'login.php'
	   		</script>";
		}
	}
?>