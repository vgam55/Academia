<div id="aniadir">
	{{-- Formulario con los campos que reciben los datos para crear una nuevo registro. Ver crear.js para acabar de ver el proceso completo--}}
	<h3>Añadir Temas</h3>
	<form  action="{{url('/aniadirTemas')}}" method="POST" class="aniadirForm" id="temas" name="temas">
		{{ csrf_field() }}
        {{ method_field('POST') }}
		   	
		   	<label for="aniadirTitulo">Titulo</label>
		   	<input type="text" id="aniadirTitulo" name="aniadirTitulo"></input>
		   	<label for="aniadirDescripcion">Descripción</label>
		   	<input type="text" id="aniadirDescripcion" name="aniadirDescripcion"></input>
		    <label for="aniadirHoras">Horas</label>
		   	<input type="text" id="aniadirHoras" name="aniadirHoras"></input>		   	
		   	<input type="submit" class="btn btn-success" id="btn-aniadir" value="Añadir">
	   </form>
</div>