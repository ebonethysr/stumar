$(document).ready(function(){

	$('#listarentrenadores').click(function(){



		$.ajax({

				url : '../../consultas/admin/listarentrenadores.php', 
					    data : { 
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					  		html="<table class='table table-bordered'><thead><tr><th>email</th><th>cedula</th><th>nombre</th><th>apellido</th><th>Telefono</th><th>Direcci&oacute;n</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado.length;i++){

								html+="<tr><td>"+resultado[i][1]+"</td><td>"+resultado[i][2]+"</td><td>"+resultado[i][3]+"</td><td>"+resultado[i][4]+"</td><td>"+resultado[i][5]+"</td><td>"+resultado[i][6]+"</td><td>"+'<input type="button" value="editar" onclick="enteditar(\''+resultado[i][1]+'\',\''+resultado[i][2]+'\',\''+resultado[i][3]+'\',\''+resultado[i][4]+'\',\''+resultado[i][5]+'\',\''+resultado[i][6]+'\',\''+resultado[i][7]+'\','+resultado[i][0]+')" data-toggle="modal" data-target="#enteditar"> <input type="button" value="eliminar" onclick="enteliminar('+resultado[i][0]+')">'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#entrenadoresencontrados').html(html);
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});



	});


	$('#entconsulta').click(function(){

		var cedulaentrenador = document.getElementById('buscarent').value;

		$.ajax({

				url : '../../consultas/admin/buscarentrenador.php', 
					    data : { 
					    	cedula: cedulaentrenador
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado2) {
					    	console.log(resultado2);
					    	if(resultado2 != 'nada'){
					  		html="<table class='table table-bordered'><thead><tr><th>email</th><th>cedula</th><th>nombre</th><th>apellido</th><th>Telefono</th><th>Direcci&oacute;n</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado2.length;i++){

								html+="<tr><td>"+resultado2[i][1]+"</td><td>"+resultado2[i][2]+"</td><td>"+resultado2[i][3]+"</td><td>"+resultado2[i][4]+"</td><td>"+resultado2[i][5]+"</td><td>"+resultado2[i][6]+"</td><td>"+'<input type="button" value="editar" onclick="enteditar(\''+resultado2[i][1]+'\',\''+resultado2[i][2]+'\',\''+resultado2[i][3]+'\',\''+resultado2[i][4]+'\',\''+resultado2[i][5]+'\',\''+resultado2[i][6]+'\',\''+resultado2[i][7]+'\','+resultado2[i][0]+')" data-toggle="modal" data-target="#enteditar"> <input type="button" value="eliminar" onclick="enteliminar('+resultado2[i][0]+')">'+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#entrenadoresencontrados').html(html);
							}
							else
							{
								 document.getElementById('entrenadoresencontrados').innerHTML = "no encontrado";
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


function enteditar(e,c,n,a,t,d,p,id)
{
 
 var email = e;
 var cedula = c;
 var nombre = n;
 var apellido = a;
 var tel = t;
 var dir = d;
 var pass = p;
 var id = id;

 document.getElementById("entnombreeditar").value = nombre;
 document.getElementById("entapellidoeditar").value = apellido;
 document.getElementById("entcedulaeditar").value = cedula;
 document.getElementById("entemaileditar").value= email;
 document.getElementById("enttelefonoeditar").value = tel;
 document.getElementById("entdireditar").value = dir;
 document.getElementById("entpasswordeditar").value = pass;
 document.getElementById("ident").value=id;
}


function enteliminar(id)
{

	var eliminar = id;


		$.ajax({

				url : '../../consultas/admin/eliminarent.php', 
					    data : { 
					    	eliminar: eliminar

					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultadot) {

	
					   	
					    	alert("El equipo ha sido eliminado");
							listarentrenadores.click();
					    },
					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});
}