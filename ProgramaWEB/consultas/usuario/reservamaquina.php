<?php
	

	include('..\..\conexion/conexion.php');

	$iduser = $_POST["iduser"];
	$idm = $_POST["idm"];
	$fecha = $_POST["fecha"];
	$hora = $_POST["hora"];
	$valor = $_POST["valor"];

	
		$consulta4 = "SELECT id_reservaequipo FROM equipos_usuarios  WHERE fecha_reserva='$fecha'";
		$resultado4 = mysqli_query($enlace, $consulta4);
		$resultado4 =  mysqli_num_rows($resultado4);

		$consulta5 = "SELECT cantidad_equipo FROM equipos WHERE id_equipo='$idm'";
		$resultado5 = mysqli_query($enlace, $consulta5);
		$resultado5 =  mysqli_fetch_row($resultado5);

	

			if($resultado4 <= ($resultado5[0]+1)){

					$consulta6 = "SELECT id_reservausuario FROM equipos_usuarios  WHERE fecha_reserva='$fecha' AND hora_reserva ='$hora'";
					$resultado6 = mysqli_query($enlace, $consulta6);
					$resultado6 =  mysqli_num_rows($resultado6);

					if($resultado6 != 0){
						echo json_encode("nada");

					}
					else{
							$consulta3 = "SELECT hora_reserva, fecha_reserva FROM equipos_usuarios  WHERE fecha_reserva='$fecha' AND hora_reserva ='$hora'";
							$resultado3 = mysqli_query($enlace, $consulta3);
							$resultado3 =  mysqli_num_rows($resultado3);

							if($resultado3 != 0)
							{
								echo json_encode("nada");
							}
							else
							{
								$consulta = "INSERT INTO equipos_usuarios VALUES(0,'$iduser','$idm','$fecha','$hora','$valor') ";
								$resultado = mysqli_query($enlace, $consulta);
								echo json_encode("");
							}
					}		
			}else
			{
				echo json_encode("nodis");
			}
		


	


	mysqli_close($enlace);
?>	