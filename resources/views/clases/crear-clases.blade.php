<div id="aniadir">
	{{-- Formulario con los campos que reciben los datos para crear una nuevo registro. Ver crear.js para acabar de ver el proceso completo--}}
	<form action="{{url('/aniadirClases')}}" method="POST" class="aniadirForm" id="clases" name="clases" style="display:inline">
			{{ csrf_field() }}
            {{ method_field('POST') }}
		    <h3>Crear Clase</h3>
		   	<label for="aniadirClase">Nombre de la Clase</label>
		   	<input type="text" id="aniadirClase" name="aniadirClase"></input>
		   	<label for="aniadirProfesor">Profesor</label>
		   	<select id="aniadirProfesor" name="aniadirProfesor">
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
