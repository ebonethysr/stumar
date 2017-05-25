<?php


	include('..\..\conexion/conexion.php');

	$categoria=$_POST["categoria"];
	
	

	$consulta = "SELECT * FROM equipos WHERE categoria_equipo='$categoria' AND equipo_activo='act'";
	$resultado = mysqli_query($enlace, $consulta);
	$arreglo = array();
	while ($re=$resultado->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re;
	}
	
	
	
	echo json_encode($arreglo);

?>