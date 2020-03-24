function nombreElemento(elemento)
{ 
	alert("hola "+elemento.attr('id'));
	return elemento.attr('id');
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