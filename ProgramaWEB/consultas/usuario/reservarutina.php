<?php
	

	include('..\..\conexion/conexion.php');

	$reserva = $_POST["id"];
	$email = $_POST["email"];	
	

		
	$consulta = "SELECT cupos_rutina FROM rutinas where id_rutina = '$reserva'  ";
	$resultado = mysqli_query($enlace, $consulta);
	$resultado =  mysqli_fetch_row($resultado);


	$cupos = ($resultado[0]-1);

	if($cupos >= 0){

		$verifica = "SELECT * FROM reservarutinas WHERE id_emailuser ='$email' AND id_rutinareservada = '$reserva'";
		$resultadov = mysqli_query($enlace, $verifica);
		$resultadov = mysqli_num_rows($resultadov);

		if($resultadov != 0){
			echo json_encode("nada");
			
		}else
		{
						
			$consulta2 = "UPDATE rutinas SET cupos_rutina ='$cupos' where id_rutina = '$reserva'  ";
			$resultado2 = mysqli_query($enlace, $consulta2);

			$consulta3 = "INSERT INTO reservarutinas VALUES(0,'$email','$reserva','act') ";
			$resultado3 = mysqli_query($enlace, $consulta3);
			echo json_encode("");
		}

	}
	
	

	mysqli_close($enlace);


?>