<?php 
	$conex = mysqli_connect("localhost", "root", "", "psicopedagogia");
		if (mysqli_connect_error()) {
			echo "Conexión Fallida: ", mysqli_connect_errno();
			exit();
		}
?>
