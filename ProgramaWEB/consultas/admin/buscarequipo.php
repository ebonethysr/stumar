<?php


	include('..\..\conexion/conexion.php');


	
	$nombre = $_POST["nombre"];

	$consulta = "SELECT * FROM equipos WHERE nombre_equipo = '$nombre' AND equipo_activo ='act'";
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