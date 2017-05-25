<?php


	include('..\..\conexion/conexion.php');


	$nombre=$_POST["nombre"];
	$cantidad=$_POST["cantidad"];
	$id=$_POST["id"];
	$categoria= $_POST["categoria"];
	$des = $_POST["des"];
	$valorreserva = $_POST["valorreserva"];
	

	$consulta = "UPDATE equipos SET nombre_equipo='$nombre', vreserva_equipo ='$valorreserva',categoria_equipo='$categoria', descripcion_equipo = '$des',cantidad_equipo='$cantidad' WHERE id_equipo = '$id'";
	$resultado = mysqli_query($enlace, $consulta);
	
	
	
	echo json_encode("");

	mysqli_close($enlace);

?>