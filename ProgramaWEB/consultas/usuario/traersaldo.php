<?php

	include('..\..\conexion/conexion.php');

	$mes = $_POST['mes'];
	$id = $_POST["id"];
	$email = $_POST["email"];	
	$consultar = "SELECT  SUM(valor_reserva) as total FROM equipos_usuarios WHERE MONTH(fecha_reserva)='$mes' AND id_reservausuario='$id'";
	$resultado = mysqli_query($enlace, $consultar);
	$arreglo = array();
	while ($re=$resultado->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re;
	}

	$consultar2 = "SELECT SUM(valor_rutina) as total FROM rutinas INNER JOIN reservarutinas WHERE reservarutinas.id_rutinareservada = rutinas.id_rutina AND MONTH(rutinas.fecha_rutina)='$mes' AND id_emailuser='$email'";
	$resultado2 = mysqli_query($enlace, $consultar2);

	while ($re2=$resultado2->fetch_array(MYSQL_NUM)) {
		$arreglo[]=$re2;
	}
	echo json_encode($arreglo);

	mysqli_close($enlace);

?>