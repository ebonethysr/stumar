<?php
	

	include('..\..\conexion/conexion.php');

	$eliminar = $_POST["eliminar"];

		
		$consulta = "UPDATE equipos SET equipo_activo='des' where id_equipo = '$eliminar' ";
		$resultado = mysqli_query($enlace, $consulta);
		echo json_encode("");
	

	mysqli_close($enlace);


?>