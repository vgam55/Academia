<div >
	{{-- Formulario que coje los datos que permite actualizar el registro correspondiente de la tabla Cursos (ver public/js/mActualizar.js)--}}
		<form action="{{ url('/actualizarCursos/'.$curso->id) }}" method="POST" class ="actualizarForm" id="actualizarCursos" name="actualizarCursos" style="display:inline">
			{{ csrf_field() }}
      		{{ method_field('PUT') }}
	   	<h3>Crear Cursos</h3>
	   	<label for="actualizarCurso">Nombre del curso</label>
	   	<input type="text" id="actualizarCurso" name="actualizarCurso" value="{{$curso->nombre_curso}}">

	 	<label for="actualizarClase">Clase</label>
		<select id="actualizarClase" name="actualizarClase">
			<option value="0">Elige una clase</option>
			@foreach($clases as $clase)
				<option value="{{$clase->id}}">{{$clase->nombre_clase}}</option>
			@endforeach
		</select>

	   	<label for="actualizarTemario">Temario</label>
	   	<select id="actualizarTemario" name="actualizarTemario">
	   		<option value="0">Elige un Temario</option>
	   		@foreach($temarios as $temario)
	   			<option value="{{$temario->id}}">{{$temario->nombre_temario}}</option>
	   		@endforeach
	   	</select>
	   	<label for="actualizarHorario">Horario</label>
	   	<select id="actualizarHorario" name="actualizarHorario">
	   		<option value="0">Elige un Horario</option>
	   		@foreach($horarios as $horario)
	 			<option value="{{$horario->id}}">{{$horario->nombre_horario }}</option>
	 		@endforeach
	   	</select>
	   	<button class="btn btn-success">Actualizar</button>
	   </form>
</div>