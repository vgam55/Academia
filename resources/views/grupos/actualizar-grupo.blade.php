<div id="actualizar">
		<form action="{{url ('/actualizarGrupos/'.$grupo->id_grupo) }}" method="POST" class="actualizarForm" id="grupos" name="grupos" style="display:inline">
			{{ csrf_field() }}
      		{{ method_field('PUT') }}
		    <h3>Actualizar Grupo</h3>
		   	<label for="actualizarNombre">Nombre del Grupo</label>
		   	<input type="text" id="actualizarNombre" name="actualizarNombre" value="{{$grupo->nombre_grupo}}">
		   	<label for="actualizarFecha">Año</label>
		   	<input type="date" id="actualizarFecha" name="actualizarFecha" value="{{$grupo->anio}}">
		   	<button class="btn btn-success">Actualizar</button>
	    </form>
	</div>