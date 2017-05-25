$(document).ready(function(){

	$('#listarrutinareservada').click(function(){

		id = document.getElementById('emailusuario').value;
		fecha = traerfecha();
		hora = traerhora();

		$.ajax({

				url : '../../consultas/usuario/traerreservarutina.php', 
					    data : { 
					    	id: id,
					    	fecha: fecha,
					    	hora: hora
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					  		html="<table class='table table-bordered'><thead><tr><th>Nombre</th><th>Fecha</th><th>Hora inicio</th><th>Costo</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado.length;i++){


								html+="<tr><td>"+resultado[i][0]+"</td><td>"+resultado[i][1]+"</td><td>"+resultado[i][2]+"</td><td>"+resultado[i][3]+"</td><td>"+'<input type="button" value="Eliminar" onclick="cancelar(\''+resultado[i][4]+'\',\''+resultado[i][5]+'\')">'+"</td></tr>";
						   	
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

function cancelar(id,r)
{
 	var id = id;
 	var rutina = r;

		$.ajax({

				url : '../../consultas/usuario/cancelar.php', 
					    data : { 
					    	id: id,
					    	r: rutina
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					  		listarrutinareservada.click();
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});
}