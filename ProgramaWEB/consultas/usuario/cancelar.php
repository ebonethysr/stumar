<?php
	

	include('..\..\conexion/conexion.php');

	$eliminar = $_POST["id"];
	$r = $_POST["r"];
		
		$consulta = "DELETE FROM reservarutinas where id_noreserva = '$eliminar' ";
		$resultado = mysqli_query($enlace, $consulta);

		$consultar2 = "SELECT cupos_rutina FROM rutinas WHERE id_rutina='$r'";
		$resultado2 = mysqli_query($enlace, $consultar2);
		$resultado2 = mysqli_fetch_row($resultado2);

		$fr=($resultado2[0]+1);

		$consultar3 = "UPDATE rutinas SET cupos_rutina='$fr' WHERE id_rutina ='$r'";
		$resultado3 = mysqli_query($enlace, $consultar3);
		echo json_encode("");
	

	mysqli_close($enlace);


?>