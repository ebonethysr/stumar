<!DOCTYPE html>
<html lan="en">
<head>
	<meta charset="utf-8">
	<title>Vitale Gimnasio</title>
	<script src="..\..\js/jquery-1.12.4.min.js"></script>
	
	<link href="..\..\imagenes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="..\..\imagenes/bootstrap/js/bootstrap.min.js"></script>
    <link href="..\..\css/admin.css" rel="stylesheet">
    <script src="..\..\js/admin/buscarusuarios.js"></script>
    <script src="..\..\js/admin/editar.js"></script>
    <script src="..\..\js/admin/agregarentrenador.js"></script>
    <script src="..\..\js/admin/listarentrenadores.js"></script>
    <script src="..\..\js/admin/registrousuarios.js"></script>
    <script src="..\..\js/admin/agregarequipo.js"></script>
    <script src="..\..\js/admin/buscarequipos.js"></script>
    <script src="..\..\js/admin/editarequipo.js"></script>
    <script src="..\..\js/admin/editarentrenador.js"></script>
    
</head>
<body>

    <div id="menu">
    	<div class ="container">
			<div id="logo"><a href="index.php"><img src="..\..\imagenes/logo/logo.png"></a></div>
			<div class="col-md-10" id ="menu1">
				<ul class="nav nav-tabs">
					<li><a href="admin.php">Inicio</a></li>
					<li><a  href = "#">Sobre nosotros</a></li>
					<li><a  href = "#">accder sin registrar</a></li>
					<div>
						<form action="..\..\consultas/salir.php">
							<input type="submit" class="btn btn-default" value="Cerrar sesi&oacute;n">
						</form>
					</div>
					
				</ul>	
			</div>
		</div>
	</div>	

	<div id = "bann">
		<img src="..\..\imagenes/banner/banner.jpg">
	</div>



	<div class="container" id ="navegacion">
		<div class="col-md-12">
			<ul class="nav nav-tabs">
			  <li role="presentation" class="active"><a href="#usuarios" role="tab" id="usuarios-tab" data-toggle="tab" aria-controls="usuario">usuarios</a></li>
			  <li role="presentation"><a href="#entrenadores" role="tab" id="entrenadores-tab" data-toggle="tab" aria-controls="entrenadores">entrenadores</a></li>
			  <li role="presentation"><a href="#equipos" role="tab" id="equipo-tab" data-toggle="tab" aria-controls="equipos">Equipos</a></li>
			</ul>
		



			<div class="tab-content" id="myTabContent"> 
				<div class="tab-pane fade in active" role="tabpanel" id="usuarios" aria-labelledby="home-tab"> 
					<div class="container" id="espacio">
						<div class="col-md-12">
							<div class="col-md-2" id="opciones">

								<div>
									<div class="row" id="tama">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail">
									      <img src="..\..\imagenes/iconos/usuario.png">
									      <div class="caption">
									        <h4>Agregar Usuario</h4>
									        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#adduser">Agregar</button>
									      </div>
									    </div>
									  </div>
									</div>
									
									<div class="row" id="tama">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail">
									      <img src="..\..\imagenes/iconos/user.png"> 
									      <div class="caption">
									        <h4>Listar Usuarios</h4>
									        <input type="button" class="btn btn-primary" id="btntodos" value="Ver">
									      </div>
									    </div>
									  </div>
									 </div>
								</div>
							</div>

							<div class="col-md-10">
								<div class="col-md-12">
									<label>Cedula Usuario: </label><input id="buscar" name="buscar" type="text">
									<input type="button" id="btnconsulta" value="Consultar">
								</div>
								
								
								<div id="usuariosencontrado"></div>
							</div>	
							
						</div>	
					</div>
				</div>
				<div class="tab-pane fade" role="tabpanel" id="entrenadores" aria-labelledby="profile-tab"> 
					<div class="container" id="espacio">
						<div class="col-md-12">
							<div class="col-md-2" id="opciones">

								<div>
									<div class="row" id="tama">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail">
									      <img src="..\..\imagenes/iconos/entrenador.png">
									      <div class="caption">
									        <h4>Agregar Entrenador</h4>
									        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#agregar">Agregar</button>
									      </div>
									    </div>
									  </div>
									</div>
									
									<div class="row" id="tama">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail">
									      <img src="..\..\imagenes/iconos/listar.png"> 
									      <div class="caption">
									        <h4>Listar Entrenadores</h4>
									        <input type="button" class="btn btn-primary" id="listarentrenadores" value="Ver">
									      </div>
									    </div>
									  </div>
									 </div>
								</div>
							</div>	

							<div class="col-md-10">
								<div class="col-md-12">
									<label>Cedula Entrenador: </label><input id="buscarent" name="buscarent" type="text">
									<input type="button" id="entconsulta" value="Consultar">
								</div>
								
								<div class="col-md-12" id="entrenadoresencontrados"></div>
								
							</div>	
						</div>
					</div>
				</div> 
				<div class="tab-pane fade" role="tabpanel" id="equipos" aria-labelledby="profile-tab"> 
					<div class="container" id="espacio">
						<div class="col-md-12">
							<div class="col-md-2" id="opciones">

								<div>
									<div class="row" id="tama">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail">
									      <img src="..\..\imagenes/iconos/icono1.png">
									      <div class="caption">
									        <h4>Registrar Equipo</h4>
									        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#registroequipo">Agregar</button>
									      </div>
									    </div>
									  </div>
									</div>
									
									<div class="row" id="tama">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail">
									      <img src="..\..\imagenes/iconos/icono2.png"> 
									      <div class="caption">
									        <h4>Listar equipos</h4>
									        <input type="button" class="btn btn-primary" id="listarequipos" name="listarequipos" value="Ver">
									      </div>
									    </div>
									  </div>
									 </div>


								</div>
							</div>	

							<div class="col-md-10">
								<div class="col-md-12">

									<p>En esta sección se puede buscar por nombre un equipo(maquinas, pesas, etc...) o por categoria, registrar equipos, listar equipos, y apartir de la lista editar y elimar un equipo</p>
									<div  class="col-md-6">
										<label>Nombre Equipo: </label><input id="buscarequipo" name="buscarequipo" type="text">
										<input type="button" id="equiposconsulta" value="Consultar">
									</div>
									<div  class="col-md-6">
									
										<div  class="col-md-8">
											<select class="form-control" id="buscarcategoriaequipo">	
									     		<option disabled="disabled" selected="selected" value="">Categoria</option>
									     		<option value="pesas">pesas</option>
									     		<option value="bicicletas">bicicletas</option>
									     		<option value="maquinas">maquinas</option>
								    		 </select>
								    	</div>	

								    	<div  class="col-md-1"> 
								    		 <input type="button" id="consultarcategoria" value="Consultar">
								     
								    	</div>
							    	</div>
							    		

								</div>
									<div class="col-md-12" id="equiposencontrados"></div>
									
								</div>
								
								
								
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

<!-- inicio modal editar -->	

	<div class="modal fade" id="editar" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Editar</h4>
			      </div>

			      <div class="form-horizontal">
			        	<div class="form-group">
						    <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="nombreeditar" name="nombreeditar" placeholder="Nombre">
						    </div>
						</div>

						<div class="form-group">
						    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="apellidoeditar" name="apellidoeditar" placeholder="Apellido">
						    </div>
						</div>

						<div class="form-group">
						    <label for="cedula" class="col-sm-2 control-label">Cedula</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="cedulaeditar" name="cedulaeditar" placeholder="Cedula">
						    </div>
						</div>
						 
						 <div class="form-group">
						    <label for="Email"  class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="emaileditar" name="emaileditar" placeholder="Email">
						    </div>
						</div>

						<div class="form-group">
						    <label for="Pass" class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="passwordeditar" name="passwordeditar" placeholder="Contraseña">
						    </div>
						</div>

						<input id="idusuario" name="idusuario" type="hidden">
			      </div>


		      <div class="modal-footer">
		      <button type="button" class="btn btn-default" data-dismiss="modal" id="rcerrar">Cerrar</button>
		       <button type="button" class="btn btn-primary" id="edit">guardar</button>
		      </div>

		    </div>

		  </div>
	</div>  
<!-- fin modal editar -->	

<!-- inicio modal editar entrenador -->	

	<div class="modal fade" id="enteditar" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Editar</h4>
			      </div>

			      <div class="form-horizontal">
			        	<div class="form-group">
						    <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="entnombreeditar" name="entnombreeditar" placeholder="Nombre">
						    </div>
						</div>

						<div class="form-group">
						    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="entapellidoeditar" name="entapellidoeditar" placeholder="Apellido">
						    </div>
						</div>

						<div class="form-group">
						    <label for="cedula" class="col-sm-2 control-label">Cedula</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="entcedulaeditar" name="entcedulaeditar" placeholder="Cedula">
						    </div>
						</div>
						 
						 <div class="form-group">
						    <label for="Email"  class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="entemaileditar" name="entemaileditar" placeholder="Email">
						    </div>
						</div>

						<div class="form-group">
						    <label for="editartelefono"  class="col-sm-2 control-label">Telefono</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="enttelefonoeditar" name="enttelefonoeditar" placeholder="Tel&eacute;fono">
						    </div>
						</div>

						<div class="form-group">
						    <label for="editardir"  class="col-sm-2 control-label">Direccion</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="entdireditar" name="entdireditar" placeholder="Direcci&oacute;n">
						    </div>
						</div>

						<div class="form-group">
						    <label for="Pass" class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="entpasswordeditar" name="entpasswordeditar" placeholder="Contraseña">
						    </div>
						</div>
							
							<input id="ident" name="ident" type="hidden">

			      </div>
	

		      <div class="modal-footer">
		      <button type="button" class="btn btn-default" data-dismiss="modal" id="entcerrar">Cerrar</button>
		       <button type="button" class="btn btn-primary" id="entedit">guardar</button>
		      </div>

		    </div>

		  </div>
	</div>  
<!-- fin modal editar entrenador-->	

<!-- inicio modal agregar -->	

	<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Nuevo Entrenador</h4>
			      </div>

			      <div class="form-horizontal">
			        	<div class="form-group">
						    <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="entrenadornombre" name="entrenadornombre" placeholder="Nombre">
						    </div>
						</div>

						<div class="form-group">
						    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="entrenadorapellido" name="entrenadorapellido" placeholder="Apellido">
						    </div>
						</div>

						<div class="form-group">
						    <label for="cedula" class="col-sm-2 control-label">Cedula</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="entrenadorcedula" name="entrenadorcedula" placeholder="Cedula">
						    </div>
						</div>
						 
						 <div class="form-group">
						    <label for="Email"  class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="entrenadoremail" name="entrenadoremail" placeholder="Email">
						    </div>
						</div>

						<div class="form-group">
						    <label for="telefono"  class="col-sm-2 control-label">Telefono</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="telefonoentrenador" name="telefonoentrenador" placeholder="Tel&eacute;fono">
						    </div>
						</div>

						<div class="form-group">
						    <label for="dir"  class="col-sm-2 control-label">Direccion</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="direntrenador" name="direntrenador" placeholder="Direcci&oacute;n">
						    </div>
						</div>

						<div class="form-group">
						    <label for="Pass" class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" id="entrenadorpassword" name="entrenadorpassword" placeholder="Contraseña">
						    </div>
						</div>
			      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal" id="entrenadorcerrar">Cerrar</button>
		        <button type="button" class="btn btn-primary" id="agregarentrenador">Agregar</button>
		      </div>

		    </div>

		  </div>
	</div>  
<!-- fin modal agregar-->	


<!-- inicio modal registro usuario -->	

	<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Registro</h4>
			      </div>

			      <div class="form-horizontal">
			        	<div class="form-group">
						    <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="nombrer" name="nombrer" placeholder="Nombre">
						    </div>
						</div>

						<div class="form-group">
						    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
						    </div>
						</div>

						<div class="form-group">
						    <label for="cedula" class="col-sm-2 control-label">Cedula</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula">
						    </div>
						</div>
						 
						 <div class="form-group">
						    <label for="Email"  class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="emailr" name="emailr" placeholder="Email">
						    </div>
						</div>

						<div class="form-group">
						    <label for="Pass" class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" id="passwordr" name="passwordr" placeholder="Contraseña">
						    </div>
						</div>
			      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal" id="pcerrar">Cerrar</button>
		        <button type="button" class="btn btn-primary" id="btnregistro">Registrarse</button>
		      </div>

		    </div>

		  </div>
	</div>  
<!-- fin modal registro usuario -->	

<!-- inicio modal registro equipos -->	

	<div class="modal fade" id="registroequipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Registro Equipos</h4>
			      </div>

			      <div class="form-horizontal">
			        	<div class="form-group">
						    <label for="nombreequipo" class="col-sm-2 control-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="nombreequipo" name="nombreequipo" placeholder="Nombre del equipo">
						    </div>
						</div>

						<div class="form-group">
						    <label for="categoriaequipo" class="col-sm-2 control-label">Categoria</label>
						    <div class="col-sm-3">
							     <select class="form-control" id="categoriaequipo">
							     		<option disabled="disabled" selected="selected" value="">Seleccionar</option>
							     		<option value="pesas">pesas</option>
							     		<option value="bicicletas">bicicletas</option>
							     		<option value="maquinas">maquinas</option>
							     </select>
						    </div>
						 </div>

						<div class="form-group">
						    <label for="descripcionequipo" class="col-sm-2 control-label">Descripci&oacute;n</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="descripcionequipo" name="descripcionequipo" placeholder="Descripci&oacute;n del equipo">
						    </div>
						</div>

						<div class="form-group">
						    <label for="valorreserva" class="col-sm-2 control-label">Valor reserva</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="valorreserva" name="valorreserva" placeholder="Valor reserva maquina">
						    </div>
						</div>

						<div class="form-group">
						    <label for="cantidadequipo" class="col-sm-2 control-label">Cantidad</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="cantidadequipo" name="cantidadequipo" placeholder="cantidad equipos disponible">
						    </div>
						</div>
					</div>	
		

		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal" id="equipocerrar">Cerrar</button>
		        <button type="button" class="btn btn-primary" id="btnregistroequipo">Registrar</button>
		      </div>

		    </div>

		  </div>
	</div> 

<!-- fin modal registro equipos -->	

<!-- inicio modal editar equipos -->	

	<div class="modal fade" id="editarequipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Editar Equipo</h4>
			      </div>

			      <div class="form-horizontal">
			        	<div class="form-group">
						    <label for="editarnombreequipo" class="col-sm-2 control-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="editarnombreequipo" name="editarnombreequipo" placeholder="Nombre del equipo">
						    </div>
						</div>

						<div class="form-group">
						    <label for="editarcategoriaequipo" class="col-sm-2 control-label">Categoria</label>
						    <div class="col-sm-3">
							     <select class="form-control" id="editarcategoriaequipo">
							     		<option disabled="disabled" selected="selected" value="">Seleccionar</option>
							     		<option value="pesas">pesas</option>
							     		<option value="bicicletas">bicicletas</option>
							     		<option value="maquinas">maquinas</option>
							     </select>
						    </div>
						 </div>

						<div class="form-group">
						    <label for="editardescripcionequipo" class="col-sm-2 control-label">Descripci&oacute;n</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="editardescripcionequipo" name="descripcionequipo" placeholder="Descripci&oacute;n del equipo">
						    </div>
						</div>

						<div class="form-group">
						    <label for="editarvalorreserva" class="col-sm-2 control-label">Valor reserva</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="editarvalorreserva" name="editarvalorreserva" placeholder="Valor reserva maquina">
						    </div>
						</div>

						<div class="form-group">
						    <label for="editarcantidadequipo" class="col-sm-2 control-label">Cantidad</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="editarcantidadequipo" name="editarcantidadequipo" placeholder="cantidad equipos disponible">
						    </div>
						</div>
			      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal" id="editarequipocerrar">Cerrar</button>
		        <button type="button" class="btn btn-primary" id="btneditarequipo">Guardar</button>
		      </div>
		       <div id="equipoid" type="hidden"></div>

		    </div>

		  </div>
	</div> 

<!-- fin modal editar equipos -->	


	<div id="footer">
		<div class="container">
				<footer class="col-md-12">	
					<p>
						Tel&eacutefono: xxx-xxx-xxxx     |     Direcci&oacuten:Carrea xx No. xx-xx     |     Email: vitale@gim.com     |     Horarios: lunes a viernes 6am-6pm, sabado-dommingo 8am-2pm<br>
						
					</p>
					
						<a class='fot' href = "http://www.facebook.com"><img src="..\..\imagenes/footer/facebook1.png"></a>
						<a class='fot' href = "http://www.twitter.com"><img src="..\..\imagenes/footer/twitter2.png"></a>
						<a class='fot' href = "http://www.instagram.com"><img src="..\..\imagenes/footer/instagram1.png"></a>
				</footer>	

		</div>
	
	</div>

</body>
</html>