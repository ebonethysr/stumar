<?php


	include('..\..\conexion/conexion.php');


	
	

	$consulta = "SELECT * FROM equipos WHERE equipo_activo='act'";
	$resultado = mysqli_query($enlace, $consulta);
	$arreglo = array();
	while ($re=$resultado->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re;
	}
	
	
	
	echo json_encode($arreglo);

?>