$(document).ready(function(){

	$('#listarequipos').click(function(){



		$.ajax({

				url : '../../consultas/admin/buscartodosequipos.php', 
					    data : { 
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					  		html="<table class='table table-bordered'><thead><tr><th>Id</th><th>Nombre</th><th>Descripcion</th><th>Categoria</th><th>Valor Reserva</th><th>Cantidad</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado.length;i++){

								html+="<tr><td>"+resultado[i][0]+"</td><td>"+resultado[i][1]+"</td><td>"+resultado[i][2]+"</td><td>"+resultado[i][3]+"</td><td>"+resultado[i][4]+"</td><td>"+resultado[i][5]+"</td><td>"+'<input type="button" value="editar" onclick="editarequipo(\''+resultado[i][1]+'\',\''+resultado[i][2]+'\',\''+resultado[i][3]+'\',\''+resultado[i][4]+'\',\''+resultado[i][5]+'\','+resultado[i][0]+')" data-toggle="modal" data-target="#editarequipo"> <input type="button" value="eliminar" onclick="eliminarequipo('+resultado[i][0]+')">'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#equiposencontrados').html(html);
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});
	
	});


	

	$('#equiposconsulta').click(function(){

		var nombreequipo = document.getElementById('buscarequipo').value;

		$.ajax({

				

				url : '../../consultas/admin/buscarequipo.php', 
					    data : { 
					    	nombre: nombreequipo
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado2) {
					    	if(resultado2 != 'nada'){
					  		html="<table class='table table-bordered'><thead><tr><th>Id</th><th>Nombre</th><th>Categoria</th><th>Descripci&oacute;n</th><th>Valor Reserva</th><th>Cantidad</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado2.length;i++){

								html+="<tr><td>"+resultado2[i][0]+"</td><td>"+resultado2[i][1]+"</td><td>"+resultado2[i][2]+"</td><td>"+resultado2[i][3]+"</td><td>"+resultado2[i][4]+"</td><td>"+resultado2[i][5]+"</td><td>"+'<input type="button" value="editar" onclick="editarequipo(\''+resultado2[i][1]+'\',\''+resultado2[i][2]+'\',\''+resultado2[i][3]+'\',\''+resultado2[i][4]+'\',\''+resultado2[i][5]+'\','+resultado2[i][0]+')" data-toggle="modal" data-target="#editarequipo"> <input type="button" value="eliminar" onclick="eliminarequipo('+resultado2[i][0]+')">'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#equiposencontrados').html(html);
							}
							else
							{
								document.getElementById('equiposencontrados').innerHTML="no encontrado";
							}
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});

	});


	$('#consultarcategoria').click(function(){

		var categoriaequipo = document.getElementById('buscarcategoriaequipo').value;

		$.ajax({

				

				url : '../../consultas/admin/buscarcategoria.php', 
					    data : { 
					    	categoria: categoriaequipo
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado3) {
					    	if(resultado3.length != 0){
					  		html="<table class='table table-bordered'><thead><tr><th>Id</th><th>Nombre</th><th>Categoria</th><th>Cantidad</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado3.length;i++){

								html+="<tr><td>"+resultado3[i][0]+"</td><td>"+resultado3[i][1]+"</td><td>"+resultado3[i][2]+"</td><td>"+resultado3[i][3]+"</td><td>"+'<input type="button" value="editar" onclick="editarequipo(\''+resultado3[i][1]+'\',\''+resultado3[i][2]+'\',\''+resultado3[i][3]+'\','+resultado3[i][0]+')" data-toggle="modal" data-target="#editarequipo"> <input type="button" value="eliminar" onclick="eliminarequipo('+resultado3[i][0]+')">'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#equiposencontrados').html(html);
							}
							else
							{
								document.getElementById('equiposencontrados').innerHTML="no encontrado";
							}
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});

	});

});




function editarequipo(n,ct,d,v,c,i)
{
 
 var nuevonombre = n;
 var nuevadescripcion = d;
 var nuevacantidad = c;
 var nuevacategoria = ct;
 var vreserva = v;
 var id=i;

 document.getElementById("editarnombreequipo").value = nuevonombre;
 document.getElementById("editarcantidadequipo").value = nuevacantidad;
 document.getElementById("equipoid").value = id;
 document.getElementById("editarcategoriaequipo").value=nuevacategoria;
 document.getElementById("editardescripcionequipo").value=nuevadescripcion;
 document.getElementById("editarvalorreserva").value= vreserva;
}


function eliminarequipo(eliminar)
{

	var eliminar = eliminar;


		$.ajax({

				url : '../../consultas/admin/eliminarequipo.php', 
					    data : { 
					    	eliminar: eliminar

					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultadot) {

	
					   	
					    	alert("El equipo ha sido eliminado");
							listarequipos.click();
					    },
					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});

}