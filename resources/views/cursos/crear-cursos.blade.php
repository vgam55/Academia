<div id="aniadir">
		<form action="{{ url('/aniadirCursos') }}" method="POST" class ="aniadirForm" id="cursos" name="cursos" style="display:inline">
			{{ csrf_field() }}
      		{{ method_field('POST') }}
	   	<h3>Crear Cursos</h3>
	   	<label for="aniadirCurso">Nombre del curso</label>
	   	<input type="text" id="aniadirCurso" name="aniadirCurso">

	 	<label for="aniadirClase">Clase</label>
		<select id="aniadirClase" name="aniadirClase">
			<option value="0">Elige una clase</option>
			@foreach($clases as $clase)
				<option value="{{$clase->id}}">{{$clase->nombre_clase}}</option>
			@endforeach
		</select>

	   	<label for="aniadirTemario">Temario</label>
	   	<select id="aniadirTemario" name="aniadirTemario">
	   		<option value="0">Elige un Temario</option>
	   		@foreach($temarios as $temario)
	   			<option value="{{$temario->id}}">{{$temario->nombre_temario}}</option>
	   		@endforeach
	   	</select>
	   	<label for="aniadirHorario">Horario</label>
	   	<select id="aniadirHorario" name="aniadirHorario">
	   		<option value="0">Elige un Horario</option>
	   		@foreach($horarios as $horario)
	 			<option value="{{$horario->id}}">{{$horario->nombre_horario }}</option>
	 		@endforeach
	   	</select>
	   	<button class="btn btn-success">Añadir</button>
	   </form>
</div>