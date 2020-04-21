<div id="aniadir">
	<form action="{{url('/aniadirClases')}}" method="POST" class="aniadirForm" id="clases" name="clases" style="display:inline">
			{{ csrf_field() }}
            {{ method_field('POST') }}
		    <h3>Crear Clase</h3>
		   	<label for="aniadirClase">Nombre de la Clase</label>
		   	<input type="text" id="aniadirClase" name="aniadirClase"></input>
		   	<label for="aniadirProfesor">Profesor</label>
		   	<input type="text" id="aniadirProfesor" name="aniadirProfesor"></input>
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
