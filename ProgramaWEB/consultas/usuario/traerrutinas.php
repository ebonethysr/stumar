<?php

	include('..\..\conexion/conexion.php');


	$fecha= $_POST["fecha"];
	$hora = $_POST["hora"];


	$consultar = "SELECT * FROM rutinas where rutina_activa ='act' AND cupos_rutina > '0' AND fecha_rutina>='$fecha' AND hora_rutina>='$hora' ";
	$resultado = mysqli_query($enlace, $consultar);
	$arreglo = array();
	while ($re=$resultado->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re;
	}
	echo json_encode($arreglo);

	mysqli_close($enlace);

?>