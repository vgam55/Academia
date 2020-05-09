<div id="actualizar">
	<form action="{{url('/actualizarHoras/'.$hora->id) }}" method="POST" class="actualizarForm" id="actualizarHoras" name="actualizarHoras" style="display:inline">
			{{ csrf_field() }}
       	    {{ method_field('PUT') }}
	   <h3>Añadir Horas</h3>
	 	
	   <label for="actualizarDia">Día</label>
	   <select id="actualizarDia" name="actualizarDia">
	   	<option value="0">Elige un día</option>
	   	<option value="Lunes">Lunes</option>
	   	<option value="Martes">Martes</option>
	   	<option value="Miercoles">Miercoles</option>
	   	<option value="Jueves">Jueves</option>
	   	<option value="Viernes">Viernes</option>
	   	<option value="Sabado">Sabado</option>
	   	<option value="Domingo">Domingo</option>
	   </select>
	   <label for="actualizarHoraIni">Hora Inicio</label>
	   <input type="time" id="actualizarHoraIni" name="actualizarHoraIni">
	   <label for="actualizarHoraFin">Hora Inicio</label>
	   <input type="time" id="actualizarHoraFin" name="actualizarHoraFin">
	   <button class="btn btn-success">Añadir</button>
	  </form>
</div>