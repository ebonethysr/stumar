<?php

include('..\conexion/conexion.php');
$correo = $_POST['email'];
$pass = $_POST['password'];



$email = "SELECT email FROM usuarios WHERE email = '$correo'";
$resultado = mysqli_query($enlace, $email);

$emailent = "SELECT email_instructor FROM instructores WHERE email_instructor = '$correo'";
$resultadoent = mysqli_query($enlace, $emailent);



$resultado = mysqli_num_rows($resultado);
$resultadoent = mysqli_num_rows($resultadoent);



	if($resultado != 0)
	{

	$passw = " SELECT pass FROM usuarios WHERE pass = '$pass' ";
	$resultadopass = mysqli_query($enlace, $passw);

	$resultadopass = mysqli_num_rows($resultadopass);

	

		if($resultadopass != 0)
		{
					$tipe = "SELECT tipo FROM usuarios WHERE email = '$correo'";
					
					$resultado2 = mysqli_query($enlace, $tipe);
					$resultado2 = mysqli_fetch_row($resultado2);
					$arreglo = $resultado2[0];

					

					$id =  "SELECT id_usuario FROM usuarios WHERE email = '$correo'";
					$resultado3 = mysqli_query($enlace, $id);
					$resultado3 = mysqli_fetch_row($resultado3);
					$id = $resultado3[0];

					
					//$user = $resultado2[0];
					session_start(); 

				
						$_SESSION["tipo"] = $arreglo;
						$_SESSION["usuarioactivo"] = $correo;
						$_SESSION["id"] = $id; 
					
					//echo $_SESSION["usuarioactivo"];
					//$_SESSION["nombreusuario"] = $user;
					if($_SESSION["tipo"]=='ADM')
					{
						header ("Location: http://localhost/php/gimnasio/paginas/admin/admin.php"); 
					}else if($_SESSION["tipo"]=='USR')
					{
						header ("Location: http://localhost/php/gimnasio/paginas/usuario/usuario.php"); 
					}else{
						header ("Location: http://localhost/php/gimnasio/paginas/entrenador/entrenador.php"); 
					}
		}
		 else{ 
      			echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.replace('http://localhost/php/gimnasio/index.php');</script>"; 
   		} 


	}
	else{ 
      		echo"<script>alert('El correo del usuario no es correcto.'); window.location.replace('http://localhost/php/gimnasio/index.php');</script>"; 
   		} 



   	if($resultadoent != 0)
	{



	$passent = " SELECT pass_instructor FROM instructores WHERE pass_instructor = '$pass' ";
	$resultadopassent = mysqli_query($enlace, $passent);

	$resultadopassent = mysqli_num_rows($resultadopassent);

		if($resultadopassent != 0)
		{

					$tipeent = "SELECT tipo_instructor FROM instructores WHERE email_instructor = '$correo'";
					
					$resultado2ent = mysqli_query($enlace, $tipeent);
					$resultado2ent = mysqli_fetch_row($resultado2ent);
					$arregloent = $resultado2ent[0];



					$ident =  "SELECT id_instructor FROM instructores WHERE email_instructor = '$correo'";
					$resultado3ent = mysqli_query($enlace, $ident);
					$resultado3ent = mysqli_fetch_row($resultado3ent);
					$ident = $resultado3ent[0];
					//$user = $resultado2[0];
					session_start(); 

					
						$_SESSION["tipo2"] = $arregloent;
						$_SESSION["usuarioactivo2"] = $correo;
						$_SESSION["id2"] = $ident; 
						
					//echo $_SESSION["usuarioactivo"];
					//$_SESSION["nombreusuario"] = $user;
					if($_SESSION["tipo"]=='ENT')
					{

						header ("Location: http://localhost/php/gimnasio/paginas/entrenador/entrenador.php"); 
					}else{
						header ("Location: http://localhost/php/gimnasio/paginas/entrenador/entrenador.php"); 
					}
		}
		 else{ 
      			echo"<script>alert('La contrase\u00f1a del usuario no es correcta.'); window.location.replace('http://localhost/php/gimnasio/index.php');</script>"; 
   		} 


	}
	else{ 
      		echo"<script>alert('El correo del usuario no es correcto.'); window.location.replace('http://localhost/php/gimnasio/index.php');</script>"; 
   		} 		

mysqli_close($enlace);



?>