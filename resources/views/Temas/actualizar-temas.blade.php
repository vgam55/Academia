<div id="actualizar">
	<h3> Actualizar Temas</h3>
	<form  action="{{asset('/actualizarTemas/'.$tema->id)}}" method="POST" class="aniadirForm" id="temas" name="temas">
		{{ csrf_field() }}
        {{ method_field('PUT') }}
		   	
		   	<label for="actualizarTitulo">Titulo</label>
		   	<input type="text" id="actualizarTitulo" name="actualizarTitulo" value="{{$tema->titulo}}">
		   	<label for="actualizarDescripcion">Descripción</label>
		   	<input type="text" id="actualizarDescripcion" name="actualizarDescripcion" value="{{$tema->descripcion}}">
		    <label for="actualizarHoras">Horas</label>
		   	<input type="text" id="actualizarHoras" name="actualizarHoras" value="{{$tema->horas}}">		   	
		   	<input type="submit" class="btn btn-success" id="btn-aniadir" value="Actualizar">
	   </form>
</div>