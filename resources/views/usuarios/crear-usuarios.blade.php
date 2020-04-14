 <div id="aniadir">
		<form action="{{url('/aniadirUsuarios')}}" method="POST" class="aniadirForm" id="usuarios" name="usuarios" style="display:inline">
			 {{ csrf_field() }}
   			 {{ method_field('POST') }}
		    <h3>Añadir Usuario</h3>
		   	<label for="aniadirNombre">Nombre del Grupo</label>
		   	<input type="text" id="aniadirNombre" name="aniadirNombre"></input>
		   	<label for="aniadirApellidos">Apellidos</label>
		   	<input type="text" id="aniadirApellidos" name="aniadirApellidos"></input>
		   	<label for="aniadirEmail">Email</label>
		   	<input type="text" id="aniadirEmail" name="aniadirEmail"></input>
		    <label for="aniadirTelefono">Telefono</label>
		   	<input type="text" id="aniadirTelefono" name="aniadirTelefono"></input>
		   	<br>
			<label for="aniadirSuperAdmin">SuperAdministrador</label>
			<input type="radio" value="1" name="rol" id="aniadirSuperAdmin" name="aniadirSuperAdmin"> 
			<label for="aniadirAdministador">Administrador</label>
		   	<input type="radio" value="2" name="rol" id="aniadirAdministrador" name="aniadirAdministrador"> 
			<label for="aniadirProfesor">Profesor</label>
			<input type="radio" value="3" name="rol" id="aniadirProfesor" name="aniadirProfesor"> 
		   	<button class="btn btn-success">Añadir</button>
	    </form>
	</div>