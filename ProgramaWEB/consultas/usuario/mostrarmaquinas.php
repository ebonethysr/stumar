<?php

	include('..\..\conexion/conexion.php');

	$id = $_POST['id'];
	$fecha = $_POST["fecha"];
	$hora = $_POST["hora"];


	$consultar = "SELECT nombre_equipo, fecha_reserva, hora_reserva, valor_reserva, id_reserva FROM equipos_usuarios INNER JOIN equipos WHERE equipos_usuarios.id_reservaequipo = equipos.id_equipo AND equipos_usuarios.id_reservausuario = '$id' AND equipos_usuarios.fecha_reserva>='$fecha'";
	$resultado = mysqli_query($enlace, $consultar);
	$arreglo = array();
	while ($re=$resultado->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re;
	}



	echo json_encode($arreglo);

	mysqli_close($enlace);

?>