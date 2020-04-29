$(
	function(){
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

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