/*
	  Muestra u ocultar la fila de la tabla en la que están los campos que sirven para
	  actualizar un registro
	*/
$(
	function(){
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
/*
	Acciones parA usar ajax a la hora de borrar un registro y luego poder mostrar mensaje
	que diga como han ido las cosas
*/
	$('.borrarForm').submit(function(event){
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
});