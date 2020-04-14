<div id="aniadir">
	<form action="{{ url('/aniadirProfesores') }}" style="display:inline">
			{{ csrf_field() }}
            {{ method_field('POST') }}
		    <h3>Añadir profesor</h3>
		   	<label for="aniadirNombre">Nombre </label>
		   	<input type="text" id="aniadirNombre" name="aniadirNombre"></input>
		   	<label for="aniadirApellidos">Apellidos</label>
		   	<input type="text" id="aniadirApellidos" name="aniadirApellidos"></input>
		   	<label for="aniadirEmail">Email</label>
		   	<input type="text" id="aniadirEmail" name="aniadirEmail"></input>
		    <label for="aniadirTelefono">Telefono</label>
		   	<input type="text" id="aniadirTelefono" name="aniadirTelefono"></input>
		   	<label for="aniadirTitulo">Titulo</label>
		   	<input type="text" id="aniadirTitulo" name="aniadirTitulo"></form>
		   	<button class="btn btn-success">Añadir</button>
	  </form>
	</div>