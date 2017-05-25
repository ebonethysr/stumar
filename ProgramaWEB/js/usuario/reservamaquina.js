$(document).ready(function(){

	$('#guardarreservamaquina').click(function(){

		fecha = document.getElementById('fechareservamaquina').value;
		hora = document.getElementById("horainicioreserva").value;
		id = document.getElementById("idusuario").value;
		idmaquina = document.getElementById('idmaquina').value;
		valormaquina = document.getElementById('valormaquina').value;
	
		$.ajax({

				url : '../../consultas/usuario/reservamaquina.php', 
					    data : { 
					    	fecha: fecha,
					    	hora: hora,
					    	iduser: id,
					    	idm: idmaquina,
					    	valor: valormaquina
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					    	if(resultado == "nada")
					    	{

						  		alert("La hora seleccionada para la reserva no se encuentra disponible");
					  			
					    	}else if(resultado == "nodis")
					    	{
					    		alert("Lo sentimos no hay maquinas disponibles");
					    	}
					    	else
					    	{
					    		alert("reservado");
					    		listarmaquina.click();
					  			maquinacerrar.click();
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
