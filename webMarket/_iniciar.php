<?php
	require_once('php/conexion.php');
	session_start();
	if (isset($_POST['iniSes'])) {
		
		if($_POST['correo'] == '' or $_POST['contraseña'] == ''){

				 echo "<script>
                alert('Por favor no deje campos vacíos.');
                window.location= 'login.php'
   				 </script>";

		}else{
			$contra = $_POST['contraseña'];
			$corr = $_POST['correo'];
			$sql = "SELECT id FROM usuarios WHERE correo = '$corr' AND contra = '$contra'";
			$result = $con->query($sql);
			$result2 = mysqli_query($con,$sql);

			if ($result->num_rows == 0) {
				echo "<script>
	            alert('El correo o la contraseña son incorrectos. ');
	            window.location= 'login.php' </script>";
			}else{
				$fila = mysqli_fetch_assoc($result2);
				$id = $fila['id'];
				setcookie('logged',$id,0);
				echo "<script>
		        alert('Has iniciado sesión exitosamente.');
		        window.location= 'index.php' </script>";
			}
		}
	}

?>