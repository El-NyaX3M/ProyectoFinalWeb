<?php
	
	if(isset($_COOKIE['logged'])){
	require_once('php/conexion.php');
	echo '<link rel="stylesheet" href="style.css">';
	$user = $_COOKIE['logged'];
	$sql = "SELECT * FROM carro WHERE idUsu = '$user'";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
					
		while ($fila = mysqli_fetch_assoc($result)) {
			if(isset($_COOKIE['logged'])){
				$usuario=$_COOKIE['logged'];
			}else{
    			$usuario=NULL;
			}
			$idprod = $fila['id'];
			$id=$fila["idProd"];
			$idusu = $fila['idUsu'];
			$nombreProd=$fila["nombreProd"];
            $descrip=$fila["descrip"];
	    	$precio=$fila["precio"];
			$rutaimg=$fila["rutaimg"];
						
			
			echo '<form action="_eliminarcarro.php" method="POST">';
			echo '<div class="carrito">
			<input type="hidden" name="id" value="',$idprod,'">
			<input type="hidden" name="idprod" value="',$id,'">
			<input type="hidden" name="rutaimg" value="',$rutaimg,'">
			<input type="hidden" name="nombre" value="',$nombreProd,'">
			<input type="hidden" name="precio" value="',$precio,'">
            <input type="hidden" name="descrip" value="',$descrip,'">
			<img src="images/',$rutaimg,'">
            <div class="info">
                <label class="nombreProd">',$nombreProd,'</label>
			    <label class="precio">Precio: $',$precio,' MXN</label>
				<p class="descrip">',$descrip,'</p>
				<button class="btn-eliminar" name="eliminar">eliminar del carrito</button>
			</div>
			</div>
            </form>';
			
		}
				
	}
	else{
		echo"<script>
			alert('No hay productos en el carrito.')
			window.location = 'index.php'
			</script>";
			
	}

	
	}
	else{
		echo"<script>
			alert('Debe iniciar sesión para acceder al carrito.')
			window.location = 'login.php'
			</script>";
	}
?>