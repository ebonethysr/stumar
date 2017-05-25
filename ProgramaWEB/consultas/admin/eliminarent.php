<?php
	

	include('..\..\conexion/conexion.php');

	$eliminar = $_POST["eliminar"];

		
		$consulta = "UPDATE instructores SET instructor_activo='des' where id_instructor = '$eliminar' ";
		$resultado = mysqli_query($enlace, $consulta);
		echo json_encode("");
	

	mysqli_close($enlace);


?>