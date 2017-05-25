$(document).ready(function(){

	$('#turnos').click(function(){



		$.ajax({

				url : '../../consultas/usuario/traerlista.php', 
					    data : { 
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					  		html="<table class='table table-bordered'><thead><tr><th>Nombre</th><th>Turno</th><th>Fecha</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado.length;i++){

								html+="<br><tr><td>"+resultado[i][1]+"</td><td>"+resultado[i][2]+"</td><td>"+resultado[i][3]+' <td> <input type="button" id="eliminar" name="eliminar" value="Tomado" onclick="eliminardatos(\''+resultado[i][0]+'\',\''+resultado[i][3]+'\')" data-toggle="modal" data-target="#elimnar" >'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#Lista').html(html);
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});



	});

});


function eliminardatos(id, fecha)
{

		$.ajax({

				url : '../../consultas/admin/eliminarturno.php', 
					    data : { 
					    	id: id,
					    	fecha: fecha
					    },
					    type : 'POST',
					    success : function(resultado) {
					    		alert('Turno eliminado' +resultado);
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema'+xhr+status); console.log(xhr);
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});



}

