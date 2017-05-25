<?php

session_start();

	$arreglo = array();
	$arreglo[] = $_SESSION["id"];
	$arreglo[] = $_SESSION["usuarioactivo"];

	echo json_encode($arreglo);
?>