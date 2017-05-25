function traerfecha()
{

	var hoy = new Date();
	var dia = hoy.getDate(); 
	var mes = hoy.getMonth()+1;
	var anio= hoy.getFullYear();
	var hoy = new Date();	
	var horasis = hoy.getHours();
	fecha_actual =String(anio+"-"+mes+"-"+dia);

	return fecha_actual;
}


function traerhora()
{
	var hoy = new Date();	
	var horasis = hoy.getHours();
	var minutos = hoy.getMinutes();
	var segundos = hoy.getSeconds();
	hora_actual =String(horasis+":"+minutos+":"+segundos);

	return hora_actual;
}