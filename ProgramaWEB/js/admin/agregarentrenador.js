$(document).ready(function(){

	$('#agregarentrenador').click(function(){


		var nombre = document.getElementById("entrenadornombre").value;
		var apellido = document.getElementById("entrenadorapellido").value;
		var cedula = document.getElementById("entrenadorcedula").value;
		var email = document.getElementById("entrenadoremail").value;
		var pass = document.getElementById("entrenadorpassword").value;
		var tel = document.getElementById("telefonoentrenador").value;
		var dir = document.getElementById("direntrenador").value;

		$.ajax({

				url : '../../consultas/admin/agregarentrenador.php', 
					    data : { 
					    	nombre: nombre,
					    	apellido: apellido,
					    	cedula: cedula,
					    	email: email,
					    	pass: pass,
					    	dir: dir,
					    	tel: tel


					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					    	
						alert("agregado con exito");
						entrenadorcerrar.click();
						listarentrenadores.click();
						document.getElementById("entrenadornombre").value='';
						document.getElementById("entrenadorapellido").value='';
					    document.getElementById("entrenadorcedula").value='';
						document.getElementById("entrenadoremail").value='';
						document.getElementById("entrenadorpassword").value='';
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

		});



	});


});