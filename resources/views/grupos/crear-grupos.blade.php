<div id="aniadir">
	{{-- Formulario con los campos que reciben los datos para crear una nuevo registro. Ver crear.js para acabar de ver el proceso completo--}}
		<form action="{{url ('/aniadirGrupos') }}" method="POST" class="aniadirForm" id="grupos" name="grupos" style="display:inline">
			{{ csrf_field() }}
      		{{ method_field('POST') }}
		    <h3>Añadir Grupo</h3>
		   	<label for="aniadirNombre">Nombre del Grupo</label>
		   	<input type="text" id="aniadirNombre" name="aniadirNombre"></input>
		   	<label for="aniadirFecha">Año</label>
		   	<input type="date" id="aniadirFecha" name="aniadirFecha"></input>
		   	<button class="btn btn-success">Añadir</button>
	    </form>
	</div>
