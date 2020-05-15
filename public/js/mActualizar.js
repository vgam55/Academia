$(function(){
	/*
	  Muestra u ocultar la fila de la tabla en la que están los campos que sirven para
	  actualizar un registro
	*/
	$('.btnEditar').click(function(){
		padre=$(this).parent();
		padre.parent().next().toggle();

	/*
		Envia los datos que se han introducido para actualizar el registro y recibe el resultado
		de dicha actualización.
		Falta por lograr que actualice la fila de la tabla que muestra el registro actualizado
		También falta mostrar el resultado de una forma más agradable.
	*/
	$('.actualizarForm').submit(function(event)
		{
			event.preventDefault();
			$.ajax({
			type: $(this).attr('method'),
			data: $(this).serialize(),
			url:  $(this).attr('action'),
			dataType: 'text',
			
			success: function(mensaje)
			{				
				alert(mensaje);
			},
			error:function(jqXHR,estado, error, data)
			{
				alert('El error es '+error);
			}
			});
		});    
})	
});