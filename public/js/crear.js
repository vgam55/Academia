/*
   Los métodos con el nombre validarXXX validan los datos que llegan de los distintos métodos
   usados para crear un nuevo registro en la tabla correspondiente.
   Las validaciones que se han creado son  ejemplos de lo que se puede validar, aunque proba-
   blemente las habrá mejores.
   */
var valido;
/*
  Función para validar los datos que crearán el registro de un nuevo alumno
  Todos los campos son obligatorios
*/

function validarAlumnos()
{
	event.preventDefault();
	var correcto=true;
	var color=$('#aniadirNombre').css('border-color');
	var nombre=$('#aniadirNombre');
	var apellidos=$('#aniadirApellidos');
	var email=$('#aniadirEmail');
	var telefono=$('#aniadirTelefono');
	var grupo=$('#aniadirGrupo');
	var fecha=$('#aniadirFecha');

	if((nombre.val().length==0) || (nombre.val()==" "))
	{
		correcto=false;
	    nombre.css('border-color','RED');
	}
	else
	{
		nombre.css('border-color',color);
	}
	if((apellidos.val().length==0) || (apellidos.val()==" "))
	{
		correcto=false;
		apellidos.css('border-color','red');
	}
	else
	{
		apellidos.css('border-color',color);
	}
	if((email.val().length==0) || (email.val()==" "))
	{
		correcto=false;
		email.css('border-color','red');
	}
	else
	{
		email.css('border-color',color);
	}
    if((telefono.val().length==0)||(telefono.val()==" "))
    {
    	correcto=false;
    	telefono.css('border-color','red');
    }
    else
    {
    	telefono.css('border-color',color)
    }
    if(grupo.val()==0)
    {
    	correcto=false;
    	grupo.css('border-color','red');
    }
    else
    {
    	grupo.css('border-color', color);
    }
    if((fecha.val().length==0) || (fecha.val()==" "))
    {
    	correcto=false;
    	fecha.css('border-color','red');
    }
	else
	{
		fecha.css('border-color',color);
	}
	return correcto;
}

/*
   Método para validar los datos que vienen de la parte de creación de una nueva clase.
   Los campos han de tener un valor distinto del inicial del tipo correcto (aniadirProfesor ha de ser
   númerico y mayor que cero)
 */
 function validarClases()
 {
 	event.preventDefault();
 	var correcto=true;
 	var color=$('#aniadirClase').css('border-color')
 	var nombreClase=$('#aniadirClase');
 	var profesor=$('#aniadirProfesor');
 	var grupo=$('#aniadirGrupo');

 	if(nombreClase.val().length<4)
 	{
 		correcto=false;
 		nombreClase.css('border-color','red');
 	}
 	else
 	{
 		nombreClase.css('border-color',color);
 	}

 	if(profesor.val().length==0)
 	{
 		correcto=false;
 		profesor.css('border-color','red');
 	}
 	else
 	{
 		profesor.css('border-color',color);
 	}
 	if(parseInt(grupo.val())==0)
 	{
 		correcto=false;
 		grupo.css('border-color','red');
 	}
 	else
 	{
 		grupo.css('border-color',color);
 	}
 	return correcto;
 }


/*
  Método para validar los datos que deberian venir de crear-cursos para crear un nuevo
  curso
 */
function validarCursos()
{
	event.preventDefault();
	var correcto=true;
	var curso=$('#aniadirCurso');
	var clase=$('#aniadirClase');
	var temario=$('#aniadirTemario');
	var horario=$('#aniadirHorario');
	var color=curso.css('border-color');
	if(curso.val().length==0)
	{
		correcto=false;
		curso.css('border-color', 'red');
	}
	else
	{
		curso.css('border-color',color);
	}

	if(clase.val()==0)
	{
		correcto=false;
		clase.css('border-color','red');
	}
	else
	{
		clase.css('border-color',color);
	}

	if(temario.val()==0)
	{
		correcto=false;
		temario.css('border-color','red');
	}
	else
	{
		temario.css('border-color',color);
	}

	if(horario.val()==0)
	{
		correcto=false;
		horario.css('border-color','red');
	}
	else
	{
		horario.css('border-color',color);
	}
	return correcto;
}

/*
  Comprueba si se han introducido datos en los campos que sirven para crear un grupo nuevo
*/
function validarGrupos()
{
	event.preventDefault();
	var correcto=true;
	var nombre=$('#aniadirNombre');
	var fecha=$('#aniadirFecha');
	var color=nombre.css('border-color');
	if(nombre.val().length==0)
	{
		correcto=false;
		nombre.css('border-color','red');
	}
	else
	{
		nombre.css('border-color',color);
	}

	if(fecha.val().length==0)
	{
		correcto=false;
		fecha.css('border-color','red');
	}
	else
	{
		fecha.css('border-color',color)
	}
	return correcto;
}
/*
 Metodo para validar los datos del formulario que crea un nuevo horario.
 Para ser validos han de tener un contenido diferente al inicial.
 */
function validarHorarios()
{
	event.preventDefault();
	var correcto=true;
	var color=$('#aniadirNombreHorario').css('border-color');

	if($('#aniadirNombreHorario').val().length==0)
	{
		correcto=false;
		$('#aniadirNombreHorario').css('border-color','red');
	}
	else
	{
		$('#aniadirNombreHorario').css('border-color',color);
	}

	if($('#aniadirHora1').val()==0)
	{
		correcto=false;
		$('#aniadirHora1').css('border-color','red');
	}
	else
	{
		$('#aniadirHora1').css('border-color',color);
	}

	if($('#aniadirHora2').val()==0)
	{
		correcto=false;
		$('#aniadirHora2').css('border-color','red');
	}
	else
	{
		$('#aniadirHora2').css('border-color',color);
	}

	if($('#aniadirHora3').val()==0)
	{
		correcto=false;
		$('#aniadirHora3').css('border-color','red');
	}
	else
	{
		$('#aniadirHora3').css('border-color',color);
	}

	if($('#aniadirHora4').val()==0)
		{
			correcto=false;
			$('#aniadirHora4').css('border-color','red');
		}
		else
		{
			$('#aniadirHora4').css('border-color',color);
		}
	if($('#aniadirHora5').val()==0)
		{
			correcto=false;
			$('#aniadirHora5').css('border-color','red');
		}
		else
		{
			$('#aniadirHora5').css('border-color',color);
		}
	return correcto;
}

/*
	Comprueba si se han introducido datos en los campos que tienen que ver con la creación
	de una nueva hora en la que dar clases.
*/
function validarHoras()
{
	event.preventDefault();
	correcto=true;
	color=$('#aniadirDia').css('border-color');
	

	if($('#aniadirDia').val()==0)
	{
		correcto=false;
		$('#aniadirDia').css('border-color','red');
	}
	else
	{
		$('#aniadirDia').css('border-color', color);
	};

	if($('#aniadirHoraIni').val().length==0)
	{
		correcto=false;
		$('#aniadirHoraIni').css('border-color','red');
	}
	else
	{
		$('#aniadirHoraIni').css('border-color', color);
	};

	if($('#aniadirHoraFin').val().length==0)
	{
		correcto=false;
		$('#aniadirHoraFin').css('border-color','red');
	}
	else
	{
		$('#aniadirHoraFin').css('border-color',color);
	};

	return correcto;
}
/*
	Comprueba si se han introducido los datos necesarios para crear un profesor nuevo
*/
function validarProfesores()
{
	event.preventDefault();
	var correcto=true;
	var color=$('#aniadirNombre').css('border-color');
  
	if($('#aniadirNombre').val().length==0)
	{
		correcto=false;
		$('#aniadirNombre').css('border-color','red');
	}
	else
	{
		$('#aniadirNombre').css('border-color',color);
	}

	if($('#aniadirApellidos').val().length==0)
	{
		correcto=false;
		$('#aniadirApellidos').css('border-color','red');
	}
	else
	{
		$('#aniadirApellidos').css('border-color',color);
	}

	if($('#aniadirEmail').val().length==0)
	{
		correcto=false;
		$('#aniadirEmail').css('border-color','red');
	}
	else
	{
		$('#aniadirEmail').css('border-color',color);
	}

	if($('#aniadirTelefono').val().length==0)
	{
		correcto=false;
		$('#aniadirTelefono').css('border-color','red');
	}
	else
	{
		$('#aniadirTelefono').css('border-color',color);
	}

	if($('#aniadirTitulo').val().length==0)
	{
		correcto=false;
		$('#aniadirTitulo').css('border-color','red');
	}
	else
	{
		$('#aniadirTitulo').css('border-color',color);
	}
	return correcto;
}

/*
	Comprueba si se han introducido los datos necesarios para crear un profesor nuevo
*/
function validarTemarios()
{
	event.preventDefault();

	var correcto=true;
	var color=$('#aniadirNombreTemario').css('border-color');

	if($('#aniadirNombreTemario').val().length==0)
	{
		$('#aniadirNombreTemario').css('border-color','red');
		correcto=false;
	}
	else
	{
		$('#aniadirNombreTemario').css('border-color',color);
	}

	if($('#aniadirTema1').val()==0)
	{
		correcto=false;
		$('#aniadirTema1').css('border-color','red');
	}
	else
	{
		$('#aniadirTema1').css('border-color',color);
	}

	if($('#aniadirTema2').val()==0)
	{
		correcto=false;
		$('#aniadirTema2').css('border-color','red');
	}
	else
	{
		$('#aniadirTema2').css('border-color',color);
	}

	if($('#aniadirTema3').val()==0)
	{
		correcto=false;
		$('#aniadirTema3').css('border-color','red');
	}
	else
	{
		$('#aniadirTema3').css('border-color',color);
	}

	if($('#aniadirTema4').val()==0)
	{
		correcto=false;
		$('#aniadirTema4').css('border-color','red');
	}
	else
	{
		$('#aniadirTema4').css('border-color',color);
	}

	if($('#aniadirTema5').val()==0)
	{
		correcto=false;
		$('#aniadirTema5').css('border-color','red');
	}
	else
	{
		$('#aniadirTema5').css('border-color',color);
	}
	
	if($('#aniadirTema6').val()==0)
	{
		correcto=false;
		$('#aniadirTema6').css('border-color','red');
	}
	else
	{
		$('#aniadirTema6').css('border-color',color);
	}

	if($('#aniadirTema7').val()==0)
	{
		correcto=false;
		$('#aniadirTema7').css('border-color','red');
	}
	else
	{
		$('#aniadirTema8').css('border-color',color);
	}

	if($('#aniadirTema7').val()==0)
	{
		correcto=false;
		$('#aniadirTema8').css('border-color','red');
	}
	else
	{
		$('#aniadirTema8').css('border-color',color);
	}
	
	if($('#aniadirTema9').val()==0)
	{
		correcto=false;
		$('#aniadirTema9').css('border-color','red');
	}
	else
	{
		$('#aniadirTema9').css('border-color',color);
	}

	if($('#aniadirTema10').val()==0)
	{
		correcto=false;
		$('#aniadirTema10').css('border-color','red');
	}
	else
	{
		$('#aniadirTema10').css('border-color',color);
	}

	if($('#aniadirTema11').val()==0)
	{
		correcto=false;
		$('#aniadirTema11').css('border-color','red');
	}
	else
	{
		$('#aniadirTema11').css('border-color',color);
	}
	
	if($('#aniadirTema12').val()==0)
	{
		correcto=false;
		$('#aniadirTema12').css('border-color','red');
	}
	else
	{
		$('#aniadirTema12').css('border-color',color);
	}

	if($('#aniadirTema13').val()==0)
	{
		correcto=false;
		$('#aniadirTema13').css('border-color','red');
	}
	else
	{
		$('#aniadirTema13').css('border-color',color);
	}

	if($('#aniadirTema14').val()==0)
	{
		correcto=false;
		$('#aniadirTema14').css('border-color','red');
	}
	else
	{
		$('#aniadirTema14').css('border-color',color);
	}
	
	if($('#aniadirTema15').val()==0)
	{
		correcto=false;
		$('#aniadirTema15').css('border-color','red');
	}
	else
	{
		$('#aniadirTema15').css('border-color',color);
	}
	return correcto;
}
/*Metodo para validar los datos que vienen de la parte de creación de un nuevo tema.
  Los campos han de tener texto y ha de ser por lo menos de 5 caracteres*/
function validarTemas()
{
	event.preventDefault();
	var correcto=true;
	
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
		
	return correcto;
}
/* Funcion para utilizar el token csrf*/
$(
	function(){
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
				valido=validarAlumnos();
				break;
			case "clases":
				valido=validarClases();
				break;
			case "cursos":
				valido=validarCursos();
				break;
			case "grupos":
				valido=validarGrupos();
				break;
			case "horarios":
				valido=validarHorarios();
				break;
			case "horas":
				valido=validarHoras();
			   	break;
			case "profesores":
				valido=validarProfesores();
				break;
			case "temarios":
				valido=validarTemarios();
				break;
			case "temas":
				valido=validarTemas();
				break;
			case "temarios":
				break;
			case "usuarios":
				break;
		}
		/*Si todo es correcto, aquí es donde mandamos los datos para que sean guardados en la BD*/
		if (valido)
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