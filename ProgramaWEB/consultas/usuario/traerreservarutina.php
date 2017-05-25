<?php

	include('..\..\conexion/conexion.php');

	$id = $_POST['id'];
	$fecha = $_POST["fecha"];
	$hora = $_POST["hora"];
	
	$consultar = "SELECT nombre_rutina, fecha_rutina, hora_rutina, valor_rutina, id_noreserva, id_rutinareservada FROM reservarutinas INNER JOIN rutinas WHERE reservarutinas.id_rutinareservada =rutinas.id_rutina AND reservarutinas.id_emailuser ='$id' AND reservarutinas.reservarutina_activo='act' AND rutinas.fecha_rutina>='$fecha' AND rutinas.hora_rutina>='$hora'";
	$resultado = mysqli_query($enlace, $consultar);
	$arreglo = array();
	while ($re=$resultado->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re;
	}


	echo json_encode($arreglo);

	mysqli_close($enlace);

?>