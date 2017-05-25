<?php

include('conexion.php');
$correo = $_POST['user'];
$pass = $_POST['pass'];



$email = "SELECT Usuario FROM usuarios WHERE Usuario = '$correo'";
$resultado = mysqli_query($enlace, $email);


$resultado = mysqli_num_rows($resultado);


	if($resultado != 0)
	{

	$passw = " SELECT Contraseña FROM usuarios WHERE Contraseña = '$pass' ";
	$resultadopass = mysqli_query($enlace, $passw);

	$resultadopass = mysqli_num_rows($resultadopass);

	

		if($resultadopass != 0)
		{
					$tipe = "SELECT Tipo FROM usuarios WHERE Usuario = '$correo'";
					
					$resultado1 = mysqli_query($enlace, $tipe);
					$resultado2 = mysqli_fetch_row($resultado1);
					$arreglo = $resultado2[0];

					

					$id =  "SELECT IdUsuario FROM usuarios WHERE Usuario = '$correo'";
					$resultado3 = mysqli_query($enlace, $id);
					$resultado4 = mysqli_fetch_row($resultado3);
					$id = $resultado4[0];

					$nombreusuario = "SELECT NombreUsuario FROM usuarios WHERE Usuario = '$correo'";
					$resultadonombre = mysqli_query($enlace, $nombreusuario);
					$resultadonombre2 = mysqli_fetch_row($resultadonombre);
					$nombreusuario = $resultadonombre2[0];
					//$user = $resultado2[0];
					session_start(); 

				
						$_SESSION["tipo"] = $arreglo;
						$_SESSION["usuarioactivo"] = $correo;
						$_SESSION["id"] = $id; 
						$_SESSION["nombre"] = $nombreusuario;
					//$_SESSION["nombreusuario"] = $user;
					if($_SESSION["tipo"]=='admin')
					{
						header ("Location: ../paginas/admin/admin.html"); 
					}else if($_SESSION["tipo"]=='usuario')
					{
						header ("Location: ../paginas/usuario/usuario.html"); 
					}
		}
		 else{ 
      			echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.replace('../index.html');</script>"; 
   		} 


	}
	else{ 
      		echo"<script>alert('El correo del usuario no es correcto.'); window.location.replace('../index.html');</script>"; 
   	}  		

mysqli_close($enlace);



?>