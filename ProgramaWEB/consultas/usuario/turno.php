<?php 
	
	include('../../datos/conexion.php');
	session_start();
	//var_dump($_SESSION["turno"]);
	$arrayName = array('tu mama' =>$_SESSION["turno"] );
	echo json_encode($arrayName);

?>