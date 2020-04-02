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
	$('.aniadirForm').click(function(){
		var id="";
		
		//Paso 1
		id=$(this).attr('id');
			$.ajax({
				type: $(id).attr('method'),
				data: $(id).serialize(),
				url:  $(id).attr('action'),
				success: function()
				{
					alert("Hemos llegado hasta aquí");
				}
	});
			alert($(this).attr('id'));
	});
});