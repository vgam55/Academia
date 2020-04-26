<div id="aniadir">
	<form action="{{ url('/aniadirProfesores') }}" method="POST" class="aniadirForm" id="profesores" name="profesores" >
			{{ csrf_field() }}
            {{ method_field('POST') }}
		    <h3>Añadir profesor</h3>
		   	<label for="aniadirNombre">Nombre </label>
		   	<input type="text" id="aniadirNombre" name="aniadirNombre">
		   	<label for="aniadirApellidos">Apellidos</label>
		   	<input type="text" id="aniadirApellidos" name="aniadirApellidos">
		   	<label for="aniadirEmail">Email</label>
		   	<input type="email" id="aniadirEmail" name="aniadirEmail">
		    <label for="aniadirTelefono">Telefono</label>
		   	<input type="text" id="aniadirTelefono" name="aniadirTelefono">
		   	<label for="aniadirTitulo">Titulo</label>
		   	<input type="text" id="aniadirTitulo" name="aniadirTitulo">
		   	<label for="aniadirPassword">Contraseña</label>
		   	<input type="password" id="aniadirPassword" name="aniadirPassword">
		   	<button class="btn btn-success">Añadir</button>
	  </form>


	</div>