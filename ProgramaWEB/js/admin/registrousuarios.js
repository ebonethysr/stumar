$(document).ready(function(){

	$('#btnregistro').click(function(){

		
         // if(validarRegistro() != false ){

			var nombre = document.getElementById('nombrer').value;
			var apellido =document.getElementById('apellido').value;
			var correo = document.getElementById('emailr').value;
			var pass = document.getElementById('passwordr').value;
			var cedula = document.getElementById('cedula').value;


			$.ajax({

				url : '../../consultas/admin/registrousuario.php',
				data : {

					correo : correo,
					nombre : nombre,
					apellido: apellido,
					pass : pass,
					cedula: cedula
				},
				type : 'POST',
				dataType : 'json',
						    success : function(resultadore) {
		
							alert("Registrado");
							pcerrar.click();
						document.getElementById('nombrer').value='';
						document.getElementById("apellido").value='';
					    document.getElementById("cedula").value='';
						document.getElementById("emailr").value='';
						document.getElementById("passwordr").value='';
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
