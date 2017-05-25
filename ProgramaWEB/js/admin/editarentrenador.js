$(document).ready(function(){

	$('#entedit').click(function(){

		var nombre = document.getElementById('entnombreeditar').value;
		var apellido =document.getElementById('entapellidoeditar').value;
		var cedula =document.getElementById('entcedulaeditar').value;
		var email =document.getElementById('entemaileditar').value;
		var pass =document.getElementById('entpasswordeditar').value;
		var tel =document.getElementById("enttelefonoeditar").value;
		var dir = document.getElementById("entdireditar").value;
		var id = document.getElementById("ident").value;
		console.log("id"+id);

		$.ajax({

				url : '../../consultas/admin/editarentrenador.php', 
					    data : { 
					    	nombre: nombre,
					    	apellido: apellido,
					    	cedula: cedula,
					    	email: email,
					    	pass: pass,
					    	tel: tel,
					    	dir: dir,
					    	id: id

					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					    	
							alert("El usuario se ha editado");
							entcerrar.click();
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