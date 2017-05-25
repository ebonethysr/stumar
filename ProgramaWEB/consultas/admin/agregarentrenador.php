<?php

	include('..\..\conexion/conexion.php');
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$correo = $_POST["email"];
	$pass = $_POST["pass"];
	$tel = $_POST["tel"];
	$dir = $_POST["dir"];
	
	$consultar = "INSERT INTO instructores VALUES(0,'$correo','$cedula','$nombre','$apellido','$tel','$dir','$pass','ENT','act')";
	$resultado = mysqli_query($enlace, $consultar);
	echo json_encode("");

	mysqli_close($enlace);

?>