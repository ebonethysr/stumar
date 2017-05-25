<?php
	

	include('..\..\conexion/conexion.php');

	$eliminar = $_POST["id"];

		
		$consulta = "DELETE FROM equipos_usuarios WHERE id_reserva ='$eliminar' ";
		$resultado = mysqli_query($enlace, $consulta);
		echo json_encode("");
	

	mysqli_close($enlace);


?>