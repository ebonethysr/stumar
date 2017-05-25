<?php

	include('..\..\conexion/conexion.php');

	$idbuscar = $_POST['nombre'];
	
	$consultar = "SELECT * FROM reservarutinas where nombre_rutina='$idbuscar' AND rutina_activa ='act' ";
	$resultado = mysqli_query($enlace, $consultar);
	$arreglo = array();
	while ($re=$resultado->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re;
	}
	echo json_encode($arreglo);

	mysqli_close($enlace);

?>