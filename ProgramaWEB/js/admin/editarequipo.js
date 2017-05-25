$(document).ready(function(){

	$('#btneditarequipo').click(function(){

		var nombre = document.getElementById('editarnombreequipo').value;
		var cantidad =document.getElementById('editarcantidadequipo').value;
		var id =document.getElementById('equipoid').value;
		var categoria = document.getElementById('editarcategoriaequipo').value;
		var descripcion = document.getElementById("editardescripcionequipo").value;
		var valorreserva = document.getElementById("editarvalorreserva").value;
		
		$.ajax({

				url : '../../consultas/admin/editarequipo.php', 
					    data : { 
					    	nombre: nombre,
					    	cantidad: cantidad,
					    	id: id,
					    	categoria: categoria,
					    	des: descripcion,
					    	valorreserva: valorreserva

					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					    	
							alert("El equipo se ha editado");
							editarequipocerrar.click();
							listarequipos.click();
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});


	});
});	