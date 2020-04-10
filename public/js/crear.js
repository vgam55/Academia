/*
	Este JavaScript se utiliza para añadir un nuevo registro en la tabla correspondiente.
	Los pasos son los siguiente:
	1. Se identifica el formulario que  envia el registro a guardar.
	2. Dependiendo del resultado elegimos la ruta correspondiente al método del controlador que 
	   guarda los datos.
	3. Usando ajax y la ruta que hemos obtenido invocamos el metodo para guardar y le mandamos los datos que llegan del formulario.
	4. los guardamos y por ultimo devolvemos un aviso de si se ha guardado con exito o no
*/


$(function(){
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

	$('.aniadirForm').submit(function(event){
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