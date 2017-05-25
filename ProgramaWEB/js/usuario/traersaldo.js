$(document).ready(function(){

	$('#listarsaldo').click(function(){

		var seleccion = document.getElementById('mes').value;
		var id = document.getElementById("idusuario").value;
		var email = document.getElementById("emailusuario").value;
		console.log(email);

		$.ajax({

				url : '../../consultas/usuario/traersaldo.php', 
					    data : { 
					    	mes: seleccion,
					    	id: id,
					    	email: email
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					    if(resultado[0][0]!= null ){
					  		html="<table class='table table-bordered'><thead><tr><th>Saldo Maquinas</th></tr></thead><tbody>";

								html+="<tr><td>"+resultado[0][0]+"</td><td>"+'<input type="button" value="Detalles" onclick="detalles(\''+id+'\',\''+seleccion+'\')">'+"</td></tr>";
						   	
						    html+="</tbody></table>"
						    $('#saldoencontrado').html(html);
						}
						else
						{
							document.getElementById("saldoencontrado").innerHTML='No se han encontrado deudas por maquinas reservadas este mes';
						}

						  if(resultado[1][0]!= null ){
							html="<table class='table table-bordered'><thead><tr><th>Saldo Rutinas</th></tr></thead><tbody>";

								html+="<tr><td>"+resultado[1][0]+"</td><td>"+'<input type="button" value="Detalles" onclick="detalles2(\''+seleccion+'\')">'+"</td></tr>";
						   	
						    html+="</tbody></table>"
						    $('#saldomaquina').html(html);
						  }else
						{
							document.getElementById("saldomaquina").innerHTML='No se han encontrado deudas por rutinas reservadas este mes';
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



function detalles(id,mes)
{
	var id = id;
	var mes = mes;
console.log(mes);
	$.ajax({

				url : '../../consultas/usuario/usuariomaquina.php', 
					    data : { 
					    	id: id,
					    	mes: mes
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					  		html="<table class='table table-bordered'><thead><tr><th>Nombre</th><th>Fecha</th><th>Hora</th><th>Valor Reserva</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado.length;i++){

								html+="<tr><td>"+resultado[i][0]+"</td><td>"+resultado[i][1]+"</td><td>"+resultado[i][2]+"</td><td>"+resultado[i][3]+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#detallesmaquina').html(html);
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

			});
}

function detalles2(mes)
{
 var id = document.getElementById("emailusuario").value;
 var mes2 = mes;
 	$.ajax({

				url : '../../consultas/usuario/usuariorutina.php', 
					    data : { 
					    	id: id,
					    	mes: mes2
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					  		html="<table class='table table-bordered'><thead><tr><th>Nombre</th><th>Fecha</th><th>Hora</th><th>Valor Reserva</th></tr></thead><tbody>";

						    // $("#pedidob").html(resultado);
						 

						    for(var i=0;i<resultado.length;i++){

								html+="<tr><td>"+resultado[i][0]+"</td><td>"+resultado[i][1]+"</td><td>"+resultado[i][2]+"</td><td>"+resultado[i][3]+"</td></tr>";
						   	
								}
						    html+="</tbody></table>"
						    $('#detallessaldo').html(html);
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

			});
}


function limpia()
{
	document.getElementById("saldoencontrado").innerHTML = '';
	document.getElementById("detallessaldo").innerHTML = '';
	document.getElementById("saldomaquina").innerHTML = '';
	document.getElementById("detallesmaquina").innerHTML = '';
}