<div id="aniadir">
		<form action="{{url('/aniadirCursos')}}" method="POST" class ="aniadirForm" id="cursos" name="cursos" style="display:inline">
	   	<h3>Crear Cursos</h3>
	 	<label for="aniadirClase">Clase</label>
	   	<input type="text" id="aniadirClase" name="aniadirClase"></input>
	   	<label for="aniadirTemario">Temario</label>
	   	<input type="text" id="aniadirTemario" name="aniadirTemario"></input>
	   	<label for="aniadirHorario">Horario</label>
	   	<input type="text" id="aniadirHorario" name="aniadirHorario"></input>
	   	<button class="btn btn-success">Añadir</button>
	   </form>
</div>