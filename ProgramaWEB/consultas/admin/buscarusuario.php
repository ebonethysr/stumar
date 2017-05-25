<?php


	include('..\..\conexion/conexion.php');


	$id = $_POST["buscar"];
	
	

	$consulta = "SELECT id_usuario, email, cedula, nombre, apellido, pass FROM usuarios WHERE cedula = '$id' AND tipo='USR' AND usuario_activo='act' ";
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