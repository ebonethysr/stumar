<?php


	include('..\..\conexion/conexion.php');


	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$cedula=$_POST["cedula"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$id =$_POST["id"];
	
	

	$consulta = "UPDATE usuarios SET email = '$email', cedula = '$cedula', nombre = '$nombre', apellido = '$apellido', pass = '$pass' WHERE id_usuario = '$id'";
	$resultado = mysqli_query($enlace, $consulta);
	
	
	
	echo json_encode("");

	mysqli_close($enlace);

?>