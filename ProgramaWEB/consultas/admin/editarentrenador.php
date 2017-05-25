<?php


	include('..\..\conexion/conexion.php');


	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$cedula=$_POST["cedula"];
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$tel =$_POST["tel"];
	$dir = $_POST["dir"];
	$id = $_POST["id"];

	$consulta = "UPDATE instructores SET email_instructor = '$email', cedula_instructor = '$cedula', nombre_instructor = '$nombre', apellido_instructor = '$apellido',direccion_instructor='$dir',telefono_instructor='$tel',pass_instructor = '$pass' WHERE id_instructor = '$id'";
	$resultado = mysqli_query($enlace, $consulta);
	
	
	
	echo json_encode("");

	mysqli_close($enlace);

?>