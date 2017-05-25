function reservarrutina(id)
{
	var id = id;
	var email = document.getElementById("emailusuario").value;

	$.ajax({

				url : '../../consultas/usuario/reservarutina.php', 
					    data : { 
					    	id: id,
					    	email: email
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(resultado) {
					    	if(resultado != "nada"){
					  			alert("reservado");
					  		}else
					  		{
					  			alert("usted ya se encuetra registrado en está rutina");
					  		}
					  		listarrutinas.click();
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }

	});
}

