$(document).ready(function(){

	$('#edit').click(function(){

		var nombre = document.getElementById('nombreeditar').value;
		var apellido =document.getElementById('apellidoeditar').value;
		var cedula =document.getElementById('cedulaeditar').value;
		var email =document.getElementById('emaileditar').value;
		var pass =document.getElementById('passwordeditar').value;
		var id =document.getElementById("idusuario").value;

		

		$.ajax({

				url : '../../consultas/admin/editarusuarios.php', 
					    data : { 
					    	nombre: nombre,
					    	apellido: apellido,
					    	cedula: cedula,
					    	email: email,
					    	pass: pass,
					    	id: id

					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					    	
							alert("El usuario se ha editado");
							btntodos.click();
							rcerrar.click();
							listarentrenadores.click();
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