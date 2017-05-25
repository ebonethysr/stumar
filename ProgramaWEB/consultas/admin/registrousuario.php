<?php

	include('..\..\conexion/conexion.php');
	$rnombre = $_POST["nombre"];
	$rapellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$rcorreo = $_POST["correo"];
	$rpass = $_POST["pass"];
	
	$consultar = "INSERT INTO usuarios VALUES(0,'$rcorreo','$cedula','$rnombre','$rapellido','$rpass','USR','act')";
	$resultado = mysqli_query($enlace, $consultar);
	echo json_encode("");

	mysqli_close($enlace);

?>