<div id="aniadir">
		""<form action="{{url('/aniadirHoras') }}" method="POST" class="aniadirForm" id="horas"name="horas" style="display:inline">
			{{ csrf_field() }}
       		 {{ method_field('POST') }}
	   	<h3>Añadir Horas</h3>
	 	<label for="aniadiNombreHorario">Nombre</label>
	   	<input type="text" id="aniadirNombreHorario" name="aniadirNombreHorario"></input>
	   	<label for="aniadiHoraIni">Hora Inicio</label>
	   	<input type="time" id="aniadirHoraIni" name="aniadirHoraIni"></input>
	   	<label for="aniadiHoraFin">Hora Inicio</label>
	   	<input type="time" id="aniadirHoraFin" name="aniadirHoraFin"></input>
	   	<button class="btn btn-success">Añadir</button>
	   </form>
	</div>