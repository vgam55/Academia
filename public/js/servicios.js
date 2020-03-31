function nombreElemento(elemento)
{ 
	var ruta="";
	/*Identificamos el elemento en el que se ha producido el click*/
	switch (elemento.attr('id'))
	{
		case "usuarios":
				ruta="/usuarios";
				break;
		case "roles":
				ruta="/roles";
				break;
		case "alumnos":
				ruta="/alumnos";
				break;
		case "profesores":
				ruta="/profesores";
				break;
		case "temas":
				ruta="/temas";
				break;
		case "horas":
				ruta="/horas";
				break;
		case "cursos":
				ruta="/cursos";
				break;
		case "grupos":
				ruta="/grupos";
				break;
		case "horarios":
				ruta="/horarios";
				break;
		case "clases":
				ruta="/clases";
				break;
		case "temarios":
				ruta="/temarios";
				break;
	}
	$(function(){
    $.ajax({
    	   type: "GET",
           url:ruta,
           data:data
           success: function (datos) {
                $('.tablist').append('<li id="usuarios">Usuarios</>'); 
                $('#usuarios').append('<div id="usuarios1"></div>');
                $('#usuarios1').html1(data);
            },
           error:function(jqXHR,estado, error, data){
           	alert('El error es '+error);
           }
         }); 
});
	alert("hola "+ruta);
	return "hola";
}

$('#usuarios').click(function(){
				nombreElemento($(this));
				  });
$('#roles').click(function(){
				nombreElemento($(this));
				  });

$('#alumnos').click(function(){
				nombreElemento($(this));
				  });
$('#profesores').click(function(){
				nombreElemento($(this));
					});
$('#temas').click(function(){
				nombreElemento($(this));
});
$('#horas').click(function(){
				nombreElemento($(this));
});
$('#cursos').click(function(){
				nombreElemento($(this));
});
$('#grupos').click(function(){
				nombreElemento($(this));
});
$('#horarios').click(function(){
				nombreElemento($(this));
});
$('#clases').click(function(){
				nombreElemento($(this));
});
$('#temarios').click(function(){
				nombreElemento($(this));
});