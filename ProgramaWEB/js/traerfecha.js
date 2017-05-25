function traerfecha()
{

	var hoy = new Date();
	var dia = hoy.getDate(); 
	var mes = hoy.getMonth()+1;
	var anio= hoy.getFullYear();

	fecha_actual =String(anio+"-"+mes+"-"+dia);

	return fecha_actual;
}


function traerhora()
{
	var hoy = new Date();	
	horasis = hoy.getHours();
	return horasis;
}