<?php 
		require_once('conexion.php');
		session_start(); 
		
		$verificar_usuario = 0;
		if(isset($_POST['regis'])){
			if ($_POST['nombre'] == '' or $_POST['primerA'] == '' or $_POST['segundoA'] == '' or $_POST['correo'] == '' or $_POST['contraseña'] == '' or $_POST['confContra'] == ''){
				 echo "<script>
                alert('Por favor no deje campos vacíos.');
                window.location= '../signup.php'
   				 </script>";
			}else{	
				$corr = $_POST['correo'];
				if (filter_var($corr, FILTER_VALIDATE_EMAIL)) {
					$sql = "SELECT * FROM usuarios WHERE correo = '$corr'";
					$result = $con->query($sql);
					if ($result->num_rows >= 1) {
					   	echo "<script>
		    	        alert('El correo que usted ingresó ya ha está registrado.');
		        	    window.location= '../signup.php'
						</script>";
					}else{
						$verificar_usuario=1;
					}
				}
				else{
					echo "<script>
					alert('El correo que usted ingresó no es válido.');
					window.location= '../signup.php'
					</script>";
				}
				if($verificar_usuario==1){
					if($_POST['contraseña'] == $_POST['confContra']){
						echo "string";
						$nombre = $_POST['nombre'];
						$priA = $_POST['primerA'];
						$segA = $_POST['segundoA'];
						$correo = $_POST['correo'];
						$contra = $_POST['contraseña'];
						$sql="INSERT INTO usuarios (nombre,primerApellido,segundoApellido,correo,contra) VALUES ('$nombre','$priA','$segA','$correo','$contra')";
						mysqli_query($con,$sql);
						echo "<script>
				        alert('Cuenta creada exitosamente.');
				        window.location= '../login.php'
				 		</script>";
					}
					else{
						echo"<script>
						alert('Las contraseñas no coinciden');
						window.location='../signup.php'
						</script>";
					}
				}
			}
		}
	?>