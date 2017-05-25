<?php
	

	include('..\..\datos/conexion.php');

	$id = $_POST["id"];
	$fecha = $_POST["fecha"];
		
		$consulta = "UPDATE turnos set Tomado = 1 WHERE idUsuarios = '$id' AND Fecha = '$fecha'";
		$resultado = mysqli_query($enlace, $consulta);
	var_dump($consulta);
	var_dump($resultado);
	mysqli_close($enlace);


?>