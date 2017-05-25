$(document).ready(function(){

	$('#btnregistroequipo').click(function(){

		
         // if(validarRegistro() != false ){

			var nombre = document.getElementById('nombreequipo').value;
			var cantidadequipo =document.getElementById('cantidadequipo').value;
			var categoria = document.getElementById('categoriaequipo').value;
			var descripcion = document.getElementById('descripcionequipo').value;
			var valorreserva = document.getElementById("valorreserva").value;
			console.log(valorreserva);
			$.ajax({

				url : '../../consultas/admin/agregarequipo.php',
				data : {

					cantidad : cantidadequipo,
					nombre : nombre,
					categoria: categoria,
					descripcion: descripcion,
					valorreserva: valorreserva
				},
				type : 'POST',
				dataType : 'json',
						    success : function(resultadore) {
		
						alert("Registrado");
						equipocerrar.click();
						listarequipos.click();
						document.getElementById('nombreequipo').value='';
						document.getElementById("cantidadequipo").value='';
						document.getElementById("categoriaequipo").value='';

						    },

						    error : function(xhr, status) {
						        alert('Disculpe, existió un problema');
						    },
						    complete : function(xhr, status) {
						    	
						    }


			});
		//}

	});
});	
