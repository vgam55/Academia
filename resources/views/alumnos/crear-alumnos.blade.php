<div id="aniadir">
		<form  action="{{ url('/aniadirAlumnos')}}" method="POST" class="aniadirFom" id="alumnos" name="alumnos">
			{{ csrf_field() }}
      		{{ method_field('POST') }}
		    <h3>Añadir alumno</h3>
		    <!-- fila 1-->
		    <div class="row">
		    	<div class="col">
				   	<label for="aniadirNombre">Nombre</label>
				   	<input type="text" id="aniadirNombre" name="aniadirNombre"></input>
		   		</div>
		   	    <div class="col"> 
				   	<label for="aniadirApellidos">Apellidos</label>
				   	<input type="text" id="aniadirApellidos" name="aniadirApellidos"></input>
		   		</div>
		   		<div class="col">
		   		  	<label for="aniadirEmail">Email</label>
		   			<input type="text" id="aniadirEmail" name="aniadirEmail"></input>
		   		</div>
		   	 </div>
		    <!-- fila 2 -->
		    <div class="row">
		    	<div class="col">
				    <label for="aniadirTelefono">Telefono</label>
				   	<input type="text" id="aniadirTelefono" name="aniadirTelefono"></input>
				</div>
				<div class="col">
				   	<label for="aniadirFecha">F.Nacimi</label>
				   	<input type="date" id="aniadirFecha" name="aniadirFecha"></input>
			    </div>
			    <div class="col">
				   	<label for="aniadirGrupo">Grupo</label>
				   	<input type="text" id="aniadirGrupo" name="aniadirGrupo"></input>
			    </div>
		   </div>
		   <div class="row">
				    <div class="col">
				   		<button class="btn btn-success ">Añadir</button>
				   	</div>
		   </div>
	    </form>
	</div>