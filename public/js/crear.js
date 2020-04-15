/*Función para validar los datos que vienen del formulario para añadir nuevos temas para 
 dar en las clases.*/
var correcto;
function validarTemas()
{
	var correcto=true;
	$('#temas').submit(function(event){
		event.preventDefault();
		var color=$('#aniadirTitulo').css('border-color');
		var titulo=$('#aniadirTitulo').val();
		var descripcion=$('#aniadirDescripcion').val();
		var horas=$('#aniadirHoras').val();
		if(titulo.length<5){ 
			$('#aniadirTitulo').css('border-color','RED');
			correcto=false;
		}
		else
		{
			$('#aniadirTitulo').css('border-color',color);
		};

		if(descripcion.length<5)
		{
			$('#aniadirDescripcion').css('border-color','RED');
			correcto=false;
		}
		else
		{
			$('#aniadirDescripcion').css('border-color',color);
		};
		
		if(horas.length==0) 
		{
			$('#aniadirHoras').css('border-color','RED');
			correcto=false;
		}
		else
		{
			$('#aniadirHoras').css('border-color',color);
		};
	});
	return correcto;
}

$(function(){


	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

	$('.aniadirForm').submit(function(event){
		event.preventDefault();
		/*
		  Empezamos por validar los datos que recibimos de cada uno de los formularios
		  1. Identificamos el formulario que ha producido el evento.
		  2. Validamos que los campos tienes los dato correctamente introducidos.
		  3. Y si están correctamente introducidos los enviamos al controler correspondientes parar 
		  	 guardarlos.
		*/
		var formulario=$(this).attr("id");
		switch (formulario)
		{
			case "alumnos":
				break;
			case "clases":
				break;
			case "cursos":
				break;
			case "grupos":
				break;
			case "horarios":
				break;
			case "horas":
			   break;
			case "profesores":
				break;
			case "temarios":
				break;
			case "temas":
				correcto=validarTemas();
				break;
			case "temarios":
				break;
			case "usuarios":
				break;
		}
		/*Si todo es correcto, aquí es donde mandamos los datos para que sean guardados en la BD*/
		if (correcto)
		{
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
		}
		
	});
});