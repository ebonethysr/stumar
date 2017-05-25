<?php

	include('..\..\conexion/conexion.php');

	
	$id = $_POST["id"];
	$mes = $_POST["mes"];
	
	$consultar = "SELECT equipos.nombre_equipo, equipos_usuarios.fecha_reserva, hora_reserva, valor_reserva FROM equipos_usuarios INNER JOIN equipos WHERE MONTH(equipos_usuarios.fecha_reserva)='$mes' AND equipos_usuarios.id_reservaequipo=equipos.id_equipo AND equipos_usuarios.id_reservausuario='$id' ";
	$resultado = mysqli_query($enlace, $consultar);
	$arreglo = array();
	while ($re=$resultado->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re;
	}
	echo json_encode($arreglo);

	mysqli_close($enlace);

?>