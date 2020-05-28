<div>
	{{-- Formulario que coje los datos que permite actualizar el registro correspondiente de la tabla Profesores, y el registro Users asociado (ver public/js/mActualizar.js)--}}
	<form action="{{ url('/actualizarProfesores/'.$profesor->id) }}" method="POST" class="actualizarForm" id="actualizarProfesores" name="actualizarProfesores" >
			{{ csrf_field() }}
            {{ method_field('PUT') }}
		    <h3>Actualizar profesor</h3>
		   	<label for="actualizarNombre">Nombre </label>
		   	<input type="text" id="actualizarNombre" name="actualizarNombre" value="{{$profesor->name}}">
		   	<label for="actualizarApellidos">Apellidos</label>
		   	<input type="text" id="actualizarApellidos" name="actualizarApellidos" value="{{$profesor->apellidos}}">
		   	<label for="actualizarEmail">Email</label>
		   	<input type="email" id="actualizarEmail" name="actualizarEmail" value="{{$profesor->email}}">
		    <label for="actualizarTelefono">Telefono</label>
		   	<input type="text" id="actualizarTelefono" name="actualizarTelefono" value="{{$profesor->telephone}}">
		   	<label for="actualizarTitulo">Titulo</label>
		   	<input type="text" id="actualizarTitulo" name="actualizarTitulo" value="{{$profesor->titulo}}">
		   	<label for="actualizarPassword">Contraseña</label>
		   	<input type="password" id="actualizarPassword" name="actualizarPassword">
		   	<button class="btn btn-success">Actualizar</button>
	  </form>
</div>