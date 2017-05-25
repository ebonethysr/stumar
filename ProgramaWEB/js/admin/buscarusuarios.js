
$(document).ready(function(){

	$('#btnconsulta').click(function(){


		var idbuscar = document.getElementById("buscar").value;

		$.ajax({

				url : '../../consultas/admin/buscarusuario.php', 
					    data : { 
					    	buscar : idbuscar

					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
							if(resultado != "nada"){
					   		html="<table class='table table-bordered'><thead><tr><th>email</th><th>cedula</th><th>nombre</th><th>apellido</th><th></th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						   
						    html+="<tr><td>"+resultado[0][1]+"</td><td>"+resultado[0][2]+"</td><td>"+resultado[0][3]+"</td><td>"+resultado[0][4]+"</td><td>"+'<input type="button" value="editar" onclick="datoseditar(\''+resultado[0][1]+'\','+resultado[0][2]+',\''+resultado[0][3]+'\',\''+resultado[0][4]+'\','+resultado[0][5]+','+resultado[0][0]+')" data-toggle="modal" data-target="#editar" > <input type="button" value="eliminar" onclick="eliminar('+resultado[0][0]+')">'+"</td></tr>";
						   	
						    html+="</tbody></table>"
						    $('#usuariosencontrado').html(html);
						    }
						    else{
						    	document.getElementById('usuariosencontrado').innerHTML='No encontrado';
						    }

					    	
					    	//alert("laboratorio agregado");
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});



	});


	$('#btntodos').click(function(){


		

		$.ajax({

				url : '../../consultas/admin/buscartodosusuario.php', 
					    data : { 
					    	

					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultadot) {

	
					   		html="<table class='table table-bordered'><thead><tr><th>email</th><th>cedula</th><th>nombre</th><th>apellido</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultadot.length;i++){

								html+="<tr><td>"+resultadot[i][1]+"</td><td>"+resultadot[i][2]+"</td><td>"+resultadot[i][3]+"</td><td>"+resultadot[i][4]+"</td><td>"+'<input type="button" value="editar" onclick="datoseditar(\''+resultadot[i][1]+'\','+resultadot[i][2]+',\''+resultadot[i][3]+'\',\''+resultadot[i][4]+'\',\''+resultadot[i][5]+'\','+resultadot[i][0]+')" data-toggle="modal" data-target="#editar"> <input type="button" value="eliminar" onclick="eliminar('+resultadot[i][0]+')">'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#usuariosencontrado').html(html);
						    

					    	
					    	//alert("laboratorio agregado");
					
					    },
					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});



	});




});



function datoseditar(email,cedula,nombre,apellido,pass,id)
{

var asignaremail = email;
var asignarcedula = cedula;
var asignarnombre =nombre;
var asignarapellido = apellido;
var asignarpass = pass;
var id = id;


document.getElementById("emaileditar").value = asignaremail;
document.getElementById("cedulaeditar").value = asignarcedula;
document.getElementById("nombreeditar").value = asignarnombre;
document.getElementById("apellidoeditar").value = asignarapellido;
document.getElementById("passwordeditar").value = asignarpass;
document.getElementById("idusuario").value = id;




}



function eliminar(eliminar)
{

	var eliminar = eliminar;


		$.ajax({

				url : '../../consultas/admin/eliminarusuario.php', 
					    data : { 
					    	eliminar: eliminar

					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultadot) {

	
					   	
					    	alert("El usuario ha sido eliminado");
							btntodos.click();
							rcerrar.click();
							listarentrenadores.click();
					    },
					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});

}