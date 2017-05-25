<!DOCTYPE html>
<html lan="en">
<head>
	<meta charset="utf-8">
	<title>Vitale Gimnasio</title>
	<script src="..\..\js/jquery-1.12.4.min.js"></script>
	
	<link href="..\..\imagenes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="..\..\imagenes/bootstrap/js/bootstrap.min.js"></script>
    <link href="..\..\css/admin.css" rel="stylesheet">
    <script src="..\..\js/usuario/listarrutinas.js"></script>
    <script src="..\..\js/usuario/reservarutina.js"></script>  
    <script src="..\..\js/usuario/traerusuario.js"></script>  
    <script src="..\..\js/usuario/traermaquina.js"></script> 
    <script src="..\..\js/usuario/reservamaquina.js"></script>
    <script src="..\..\js/usuario/listarreserva.js"></script>
    <script src="..\..\js/usuario/mostrarmaquina.js"></script>
	<script src="..\..\js/usuario/traersaldo.js"></script>
	<script src="..\..\js/usuario/traerfecha.js"></script>
</head>
<body onload="traerusuario()">

    <div id="menu">
    	<div class ="container">
			<div id="logo"><a href="index.php"><img src="..\..\imagenes/logo/logo.png"></a></div>
			<div class="col-md-10" id ="menu1">
				<ul class="nav nav-tabs">
					
					<li><a href="..\..\index.php">Inicio</a></li>
					<li><a  href = "#">Sobre nosotros</a></li>
				
					<div class="col-md-2 col-md-offset-6">
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
			  <li role="presentation" class="active"><a href="#rutinas" role="tab" id="rutinas-tab" data-toggle="tab" aria-controls="rutinas">Reservar Rutinas</a></li>
			  <li role="presentation"><a href="#maquinas" role="tab" id="maquinas-tab" data-toggle="tab" aria-controls="maquinas">Reservar Maquinas</a></li>
			  <li role="presentation"><a href="#pagos" role="tab" id="pagos-tab" data-toggle="tab" aria-controls="">Saldo</a></li>
			</ul>
		



			<div class="tab-content" id="myTabContent"> 
				<div class="tab-pane fade in active" role="tabpanel" id="rutinas" aria-labelledby="home-tab"> 
					<div class="container" id="espacio">
						<div class="col-md-12">
							<div class="col-md-2" id="opciones">

								<div>
									<div class="row">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail"  id="tama">
									      <img src="..\..\imagenes/iconos/rutina.png">
									      <div class="caption">
									        <h5>Rutinas disponibles</h5>
									        <button type="button" class="btn btn-primary btn-sm" id="listarrutinas">Ver</button>
									      </div>
									    </div>
									  </div>
									</div>
									
								</div>

								<div>
									<div class="row">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail"  id="tama">
									      <img src="..\..\imagenes/iconos/rutina.png">
									      <div class="caption">
									        <h5>Rutinas reservadas</h5>
									        <button type="button" class="btn btn-primary btn-sm" id="listarrutinareservada">Ver</button>
									      </div>
									    </div>
									  </div>
									</div>
									
								</div>
								<input id="idusuario" name="idusuario" type="hidden">
								<input id="emailusuario" name="emailusuario" type="hidden">
							</div>

							<div class="col-md-10" id="datos">
								<p>En esta sección podra reservar rutinas, cancelar rutinas reservadas y listar tus rutinas<br>
									
								</p>
							<!--	<div class="col-md-12">
									<label>Nombre Rutina: </label><input id="rutinabuscar" name="rutinabuscar" type="text">
									<input type="button" id="btnconsulta" value="Buscar">
								</div>-->
								<div id="rutinasencontradas"></div>

							</div>	
							
						</div>	
					</div>
				</div>

				<div class="tab-pane fade" role="tabpanel" id="maquinas" aria-labelledby="home-tab"> 
					<div class="container" id="espacio">
						<div class="col-md-12">
							<div class="col-md-2" id="opciones">

								<div>
									<div class="row">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail"  id="tama">
									      <img src="..\..\imagenes/iconos/rutina.png">
									      <div class="caption">
									        <h5>Maquinas disponibles</h5>
									        <button type="button" class="btn btn-primary btn-sm" id="listarmaquina">Ver</button>
									      </div>
									    </div>
									  </div>
									</div>
									
								</div>


								<div>
									<div class="row">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail"  id="tama">
									      <img src="..\..\imagenes/iconos/rutina.png">
									      <div class="caption">
									        <h5>Maquinas reservadas</h5>
									        <button type="button" class="btn btn-primary btn-sm" id="maquinareservada">Ver</button>
									      </div>
									    </div>
									  </div>
									</div>
									
								</div>

							</div>

							<div class="col-md-10" id="datos">
								<p>En esta sección podra reservar maquinas disponibles, cancelar reservadas y listar las maquinas reservadas<br>
								</p>
								<div id="maquinasencontradas"></div>

							</div>	
							
						</div>	
					</div>
				</div>
 
				<div class="tab-pane fade" role="tabpanel" id="pagos" aria-labelledby="home-tab"> 
					<div class="container" id="espacio">
						<div class="col-md-12">
							<div class="col-md-2" id="opciones">

								<div>
									<div class="row">
									  <div class="col-sm-12 col-md-12">
									    <div class="thumbnail"  id="tama">
									      <img src="..\..\imagenes/iconos/rutina.png">
									      <div class="caption">
									        <h5>Mi Saldo</h5>

									        <button type="button" class="btn btn-primary btn-sm" id="listarsaldo">Ver</button>
									      </div>
									    </div>
									  </div>
									</div>
									
									
								</div>




							</div>


							<div class="col-md-10" id="datos">
								<p>En esta sección podras consultar tu saldo mensual.<br>
									
								</p>

									<div class="form-group">
										<label for="mes" class="col-sm-1 control-label">Mes</label>
										<div class="col-sm-3">
											<select class="form-control" id="mes" onchange="limpia()">
											     		<option disabled="disabled" selected="selected" value="">Seleccionar</option>
											     		<option value="01">1</option>
											     		<option value="02">2</option>
											     		<option value="03">3</option>
											     		<option value="04">4</option>
											     		<option value="05">5</option>
											     		<option value="06">6</option>
											     		<option value="07">7</option>
											     		<option value="08">8</option>
											     		<option value="09">9</option>
											     		<option value="10">10</option>
											     		<option value="11">11</option>
											     		<option value="12">12</option>
											</select>
										 </div>

									</div>
							<div class="col-md-12">		
								<div id="saldoencontrado"></div>
								<div id="detallesmaquina"></div>
								<div id="saldomaquina"></div>
								<div id="detallessaldo"></div>
							</div>	

							</div>	

							
						</div>	
					</div>
				</div>				


			</div>	
		</div>
	</div>

	<div class="modal fade" id="addmaquina" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">

			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Rutina</h4>
			      </div>
				<div class="form-horizontal">

					<div class="form-group">
						    <label for="fechamaquina" class="col-sm-2 control-label">Fecha</label>
						    <div class="col-sm-6">
						      <input type="date" class="form-control" id="fechareservamaquina" name="fechareservamaquina" placeholder="Fecha Rutina">
						    </div>
					</div>

					<div class="form-group">
							    <label for="horareservamaquina" class="col-sm-2 control-label">Hora Inicio</label>
							    <div class="col-sm-3">
							     	<select class="form-control" id="horainicioreserva">
							     		<option disabled="disabled" selected="selected" value="">Seleccionar</option>
							     		<option value="6">6</option>
							     		<option value="7">7</option>
							     		<option value="8">8</option>
							     		<option value="9">9</option>
							     		<option value="10">10</option>
							     		<option value="11">11</option>
							     		<option value="12">12</option>
							     		<option value="13">13</option>
							     		<option value="14">14</option>
							     		<option value="15">15</option>
							     		<option value="16">16</option>
							     		<option value="17">17</option>
							     		<option value="18">18</option>
							     		<option value="19">19</option>
							     	</select>
							    </div>
					</div>
						<input id="idmaquina" name="idmaquina" type="hidden">
						<input id="valormaquina" name="valormaquina" type="hidden">

				</div>

			<div class="modal-footer">
		     	<button type="button" class="btn btn-default" data-dismiss="modal" id="maquinacerrar">Cerrar</button>
		        <button type="button" class="btn btn-primary" id="guardarreservamaquina">guardar</button>
		     </div>

		    </div>

		  </div>
	</div> 



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