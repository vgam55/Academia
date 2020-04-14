<div id="aniadir">
	<form action="/aniadirClases" method="POST" class="aniadirForm" id="clases" name="clases" style="display:inline">
			{{ csrf_field() }}
            {{ method_field('POST') }}
		    <h3>Crear Clase</h3>
		   	<label for="aniadirClases">Nombre de la Clase</label>
		   	<input type="text" id="aniadirClases" name="aniadirClases"></input>
		   	<label for="aniadirProfesor">Profesor</label>
		   	<input type="text" id="aniadirProfesor" name="aniadirProfesor"></input>
		   	<label for="aniadirGrupo">Grupo</label>
		   	<input type="text" id="aniadirGrupo" name="aniadirGrupo"></input>
		   	<button class="btn btn-success">Añadir</button>
	  </form>
</div>