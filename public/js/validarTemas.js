$(function(){
	$('#temas').submit(function(event){
		event.preventDefault();
		var correcto=false;
		var color=$('#aniadirTitulo').css('border-color');
		alert(color);
		var titulo=$('#aniadirTitulo').val();
		var descripcion=$('#aniadirDescripcion').val();
		var horas=$('#aniadirHoras').val();
		if(titulo.length<5){ 
			$('#aniadirTitulo').css('border-color','RED');
		}
		else
		{
			$('#aniadirTitulo').css('border-color',color);
		};

		if(descripcion.length<5)
		{
			$('#aniadirDescripcion').css('border-color','RED');
		}
		else
		{
			$('#aniadirDescripcion').css('border-color',color);
		};
		
		if(horas.length==0) 
		{
			$('#aniadirHoras').css('border-color','RED');
		}
		else
		{
			$('#aniadirHoras').css('border-color',color);
		};
	});
});