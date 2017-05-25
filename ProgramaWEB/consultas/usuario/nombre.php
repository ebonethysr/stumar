<?php	
	include('../../datos/conexion.php');
	session_start();
	//var_dump($_SESSION["turno"]);
	$arrayName = array('nombre' =>$_SESSION["nombre"] );
	echo json_encode($arrayName);

?>