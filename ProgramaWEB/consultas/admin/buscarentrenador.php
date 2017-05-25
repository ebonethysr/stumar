<?php


	include('..\..\conexion/conexion.php');


	$cedula = $_POST["cedula"];
	

	$consulta = "SELECT * FROM instructores WHERE cedula_instructor = '$cedula' AND instructor_activo='act' ";
	$resultado = mysqli_query($enlace, $consulta);
	$verifica = mysqli_num_rows($resultado);
	if($verifica != 0){
		$arreglo = array();
		while ($re=$resultado->fetch_array(MYSQL_NUM)) {
			$arreglo[]=$re;
		}
	}
	else
	{
		$arreglo = "nada";
	}
	
	
	
	echo json_encode($arreglo);

?>