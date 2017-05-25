<?php

	include('../../datos/conexion.php');


	$consultar = "SELECT u.IdUsuario, u.NombreUsuario, t.Turno, t.Fecha FROM turnos AS t INNER JOIN usuarios AS u ON u.IdUsuario = t.idUsuarios WHERE t.Tomado = '0'";
	$resultado = mysqli_query($enlace, $consultar);
	$arreglo = array();
	while ($re=$resultado->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re;
	}
	echo json_encode($arreglo);

	mysqli_close($enlace);

?>