<div>
		<form  action="{{ asset('/actualizarAlumnos/'.$alumno->id) }}" method="POST" class="actualizarForm" id="actualizarAlumnos" name="actualizarAlumnos" style="display:inline">
			{{ csrf_field() }}
      		{{ method_field('PUT') }}
		    <h3>Actualizar alumno</h3>
		    <!-- fila 1-->
		    <div class="row">
		    	<div class="col">
				   	<label for="actualizarNombre">Nombre</label>
				   	<input type="text" id="actualizarNombre" name="actualizarNombre" value="{{$alumno->nombre}}">
		   		</div>
		   	    <div class="col"> 
				   	<label for="actualizarApellidos">Apellidos</label>
				   	<input type="text" id="actualizarApellidos" name="actualizarApellidos" value="{{$alumno->apellidos}}"></input>
		   		</div>
		   		<div class="col">
		   		  	<label for="actualizarEmail">Email</label>
		   			<input type="text" id="actualizarEmail" name="actualizarEmail" value="{{$alumno->email}}">
		   		</div>
		   	 </div>
		    <!-- fila 2 -->
		    <div class="row">
		    	<div class="col">
				    <label for="actualizarTelefono">Telefono</label>
				   	<input type="text" id="actualizarTelefono" name="actualizarTelefono" value="{{$alumno->telefono}}">
				</div>
				<div class="col">
				   	<label for="actualizarFecha">F.Nacimi</label>
				   	<input type="date" id="actualizarFecha" name="actualizarFecha" value="{{$alumno->fecha_nacimiento}}">
			    </div>
			    <div class="col">
				   	<label for="actualizarGrupo">Grupo</label>
				    <select class="form-control" id="actualizarGrupo" name="actualizarGrupo">
       				  <option value="0">Elije un grupo</option>
        				 @foreach($grupos as $grupo)
          					 <option value="{{$grupo->id_grupo}}">{{$grupo->nombre_grupo}}</option>
         				 @endforeach
                    </select>
			    </div>
		   </div>
		   <div class="row">
				    <div class="col">
				   		<input type="submit" class="btn btn-success " value="Actualizar">
				   	</div>
		   </div>
	    </form>
	</div>