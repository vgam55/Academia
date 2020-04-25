<div id="aniadir">
		<form action="{{url('/aniadirHoras') }}" method="POST" class="aniadirForm" id="horas" name="horas" style="display:inline">
			{{ csrf_field() }}
       	    {{ method_field('POST') }}
	   	<h3>Añadir Horas</h3>
	 	
	   	<label for="aniadirDia">Día</label>
	   	<select id="aniadirDia" name="aniadirDia">
	   		<option value="0">Elige un día</option>
	   		<option value="Lunes">Lunes</option>
	   		<option value="Martes">Martes</option>
	   		<option value="Miercoles">Miercoles</option>
	   		<option value="Jueves">Jueves</option>
	   		<option value="Viernes">Viernes</option>
	   		<option value="Sabado">Sabado</option>
	   		<option value="Domingo">Domingo</option>
	   	</select>
	   	<label for="aniadirHoraIni">Hora Inicio</label>
	   	<input type="time" id="aniadirHoraIni" name="aniadirHoraIni">
	   	<label for="aniadiHoraFin">Hora Inicio</label>
	   	<input type="time" id="aniadirHoraFin" name="aniadirHoraFin">
	   	<button class="btn btn-success">Añadir</button>
	   </form>

</div>
