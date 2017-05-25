$(document).ready(function(){

	$('#listarrutinas').click(function(){

		var fecha= traerfecha();
		var hora = traerhora();

		$.ajax({

				url : '../../consultas/usuario/traerrutinas.php', 
					    data : { 
					    	fecha: fecha,
					    	hora: hora
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					  		html="<table class='table table-bordered'><thead><tr><th>Nombre</th><th>Descripcion</th><th>Fecha</th><th>Hora inicio</th><th>Duraci&oacute;n</th><th>Costo</th><th>Cupos</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado.length;i++){

								html+="<tr><td>"+resultado[i][2]+"</td><td>"+resultado[i][3]+"</td><td>"+resultado[i][4]+"</td><td>"+resultado[i][5]+" horas"+"</td><td>"+resultado[i][6]+" hora(s)"+"</td><td>"+resultado[i][7]+"</td><td>"+resultado[i][8]+"</td><td>"+'<input type="button" value="reservar" onclick="reservarrutina(\''+resultado[i][0]+'\')">'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#rutinasencontradas').html(html);
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});



	});

	
	$('#btnconsulta').click(function(){

		var nombre = document.getElementById('rutinabuscar').value;
		
		$.ajax({

				url : '../../consultas/usuario/buscarrutina.php', 
					    data : { 
					    	nombre: nombre
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					  		html="<table class='table table-bordered'><thead><tr><th>Nombre</th><th>Descripcion</th><th>Fecha</th><th>Hora inicio</th><th>Duraci&oacute;n</th><th>Costo</th><th>Cupos</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado.length;i++){

								html+="<tr><td>"+resultado[i][2]+"</td><td>"+resultado[i][3]+"</td><td>"+resultado[i][4]+"</td><td>"+resultado[i][5]+" horas"+"</td><td>"+resultado[i][6]+" hora(s)"+"</td><td>"+resultado[i][7]+"</td><td>"+resultado[i][8]+"</td><td>"+'<input type="button" value="reservar" onclick="reservarrutina(\''+resultado[i][0]+'\')">'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#rutinasencontradas').html(html);
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});



	});

});