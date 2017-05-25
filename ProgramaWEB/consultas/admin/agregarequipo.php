<?php

	include('..\..\conexion/conexion.php');
	$nombre = $_POST["nombre"];
	$cantidadequipo = $_POST["cantidad"];
	$categoria = $_POST["categoria"];
	$descripcion = $_POST['descripcion'];
	$valorreserva = $_POST["valorreserva"];

	$consultar = "INSERT INTO equipos VALUES(0,'$nombre','$categoria','$descripcion','$valorreserva','$cantidadequipo','act')";
	$resultado = mysqli_query($enlace, $consultar);
	echo json_encode("");

	mysqli_close($enlace);

?>