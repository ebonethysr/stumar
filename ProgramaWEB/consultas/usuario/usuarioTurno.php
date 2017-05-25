<?php

	include('../../datos/conexion.php');
	session_start();
	$id = $_SESSION["id"];
	//setlocale(LC_ALL,'es_ES');
	//$hoy = date("Y-m-d H:i:s");	
	
	$fechas = date("r");
	$hora = date("G:H:s");
	
	$consultar = "SELECT Turno FROM turnos WHERE idUsuarios='$id' AND Fecha = '$fechas'";
	$resultado = mysqli_query($enlace, $consultar);

	$consultar1 = "SELECT MAX(Turno) FROM turnos WHERE Fecha = '$fechas'";
	$resultado1 = mysqli_query($enlace, $consultar1);
	
	$turno = mysqli_fetch_row($resultado); 		var_dump($turno);

	if ($turno[0] > 0) {
		$_SESSION["turno"] = $turno[0];
		header ("Location: ../../paginas/usuario/usuario.html"); 
	}else{
		$turno2 = mysqli_fetch_row($resultado1);
		$turno2[0]++;
		$_SESSION["turno"] = $turno2[0];
		
		$consultar2 = "INSERT INTO turnos VALUES (null,'$turno2[0]', 0, '$fechas', '$hora', '$id')";
		$resultado2 = mysqli_query($enlace, $consultar2);


		header ("Location: ../../paginas/usuario/usuario.html");
	}
	mysqli_close($enlace);
?>