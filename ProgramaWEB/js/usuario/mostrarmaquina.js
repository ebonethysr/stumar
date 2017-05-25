$(document).ready(function(){

	$('#maquinareservada').click(function(){

		id = document.getElementById('idusuario').value;
		fecha = traerfecha();
		hora = traerhora();

		$.ajax({

				url : '../../consultas/usuario/mostrarmaquinas.php', 
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


								html+="<tr><td>"+resultado[i][0]+"</td><td>"+resultado[i][1]+"</td><td>"+resultado[i][2]+"</td><td>"+resultado[i][3]+"</td><td>"+'<input type="button" value="Eliminar" onclick="maquinaeliminar(\''+resultado[i][4]+'\')">'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#maquinasencontradas').html(html);
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});
	});
});


function maquinaeliminar(id)
{
 	var id = id;
 	console.log(id);
 		$.ajax({

				url : '../../consultas/usuario/maquinacancelar.php', 
					    data : { 
					    	id: id
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					    	alert("eliminado");
					  		maquinareservada.click();
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});

	
}