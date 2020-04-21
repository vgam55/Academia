<div id="aniadir">
		<form action="{{url('/aniadirCursos')}}" method="POST" class ="aniadirForm" id="cursos" name="cursos" style="display:inline">
	   	<h3>Crear Cursos</h3>
	   	<label for="aniadirCurso">Nombre del curso</label>
	   	<input type="text" id="aniadirCurso" name="aniadirCurso">

	 	<label for="aniadirClase">Clase</label>
	   	<input type="text" id="aniadirClase" name="aniadirClase">

	   	<label for="aniadirTemario">Temario</label>
	   	<input type="text" id="aniadirTemario" name="aniadirTemario"></input>
	   	
	   	<label for="aniadirHorario">Horario</label>
	   	<input type="text" id="aniadirHorario" name="aniadirHorario">
	   	<button class="btn btn-success">Añadir</button>
	   </form>
</div>