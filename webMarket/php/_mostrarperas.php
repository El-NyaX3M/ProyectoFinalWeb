<?php
	require_once('conexion.php');

	echo '<link rel="stylesheet" href="style.css">';
	$sql = "SELECT * FROM productos WHERE tipo = 2";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
					
		while ($fila = mysqli_fetch_assoc($result)) {
			if(isset($_COOKIE['logged'])){
				$usuario=$_COOKIE['logged'];
			}else{
    			$usuario=NULL;
			}
			$id=$fila["id"];
			$nombreProd=$fila["nombreProd"];
            $descrip=$fila["descrip"];
	    	$precio=$fila["precio"];
			$rutaimg=$fila["rutaimg"];
						
			
			echo '<form action="_agregarCarrito.php" method="POST">';
			echo '<div class="producto">
			<input type="hidden" name="id" value="',$id,'">
			<input type="hidden" name="rutaimg" value="',$rutaimg,'">
			<input type="hidden" name="nombre" value="',$nombreProd,'">
			<input type="hidden" name="precio" value="',$precio,'">
            <input type="hidden" name="descrip" value="',$descrip,'">
			<img src="images/',$rutaimg,'">
            <div class="info">
                <label class="nombreProd">',$nombreProd,'</label>
			    <label class="precio">Precio: $',$precio,' MXN</label>
				<p class="descrip">',$descrip,'</p>
				<button class="btn-agregar" name="agregar">Agregar al carrito</button>
			</div>
			</div>
            </form>';
			
		}
				
	}

?>