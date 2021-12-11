<?php
    $con=mysqli_connect('localhost','root','','webmarket_database');
    $con->set_charset("utf8");
		
		if (!$con) {
	    echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : ". mysqli_connect_error() . PHP_EOL;
	    die;
	    }
?> 