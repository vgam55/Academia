<div id="actualizar">
	<form action="{{asset('/actualizarClases/'.$clase->id)}}" method="POST" class="actualizarForm" id="clases" name="clases" style="display:inline">
			{{ csrf_field() }}
            {{ method_field('PUT') }}
		    <h3>Actualizar Clase</h3>
		   	<label for="actualizarClase">Nombre de la Clase</label>
		   	<input type="text" id="actualizarClase" name="actualizarClase" value="{{ $clase->nombre_clase }}">
		   	<label for="actualizarProfesor">Profesor</label>
		   	<select id="actualizarProfesor" name="actualizarProfesor">
		   		<option value="0">Elige un profesor</option>
		   		@foreach($profesores as $profesor)
		   			<option value="{{$profesor->id}}">{{$profesor->name}}</option>
		   		@endforeach
		   	</select>
		   	<label for="aniadirGrupo">Grupo</label>
		   	<select id="aniadirGrupo" name="aniadirGrupo">
		   		<option value="0">Elige un grupo</option>
		   		@foreach($grupos as $grupo)
		   			<option value="{{$grupo->id_grupo}}">{{$grupo->nombre_grupo}}</option>
		   		@endforeach
		   	</select>
		   	<button class="btn btn-success">Añadir</button>
	  </form>
</div>