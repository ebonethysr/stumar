function traerusuario(){
	$.ajax({
					    url : '../../consultas/usuario/traerusuario.php', 
					    data : { 
					 
					    },
					    type : 'POST',
					    dataType : 'json',
					    success : function(result) {
					    	document.getElementById('idusuario').value=result[0];
					    	document.getElementById('emailusuario').value=result[1];
					 
					    },

					    error : function(xhr, status) {
					        alert('Disculpe, existió un problema');
					    },
					    complete : function(xhr, status) {
					    	
					    }
	});
}