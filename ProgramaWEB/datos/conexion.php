<?php
//Conectar a la BD: Necesitamos que el servidor esté arrancado. 
		$enlace = mysqli_connect("localhost", "root","","stumar");
		mysqli_set_charset($enlace, "utf8");
			if (mysqli_connect_errno()) {
    			echo "Conexión fallida:";
				echo mysqli_connect_error();
				exit();
			}
?>

