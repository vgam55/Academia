@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	{{-- Apartado en el que se incluye el titulo de la pagina y el botón para mostrar y ocultar el apartado donde se crea un nuevo registro (Ver mAniadir.js)--}}
	<div>
		<h1><i class='iconos fas fa-user-graduate' style="color: black;"></i>ALUMNOS <a href="#" class="btn btn-primary btnAniadir"><i class='fas fa-plus'></i>  Añadir Alumno</a></h1>
	</div>
	 @include('alumnos.crear-alumnos')

	{{-- Apartado con el formulario para filtrar los datos de la tabla Alumnos --}}
	<div id="filtrar">
		<form action="{{ url('/filtrarAlumnos')}}" method="GET">
			 @csrf
             @method('GET')
		    <h3>Filtrar alumno</h3>
		    <!-- fila 1-->
		    <div class="row">
		    	<div class="col">
				   	<label for="filtrarNombre">Nombre</label>
				   	<input type="text" id="filtrarNombre" name="filtrarNombre"></input>
		   		</div>
		   	    <div class="col">
				   	<label for="filtrarApellidos">Apellidos</label>
				   	<input type="text" id="filtrarApellidos" name="filtrarApellidos"></input>
		   		</div>
		   		<div class="col">
		   		  	<label for="filtrarEmail">Email  </label>
		   			<input type="text" id="filtrarEmail" name="filtrarEmail"></input>
		   		</div>
		   	 </div>
		    <!-- fila 2 -->
		    <div class="row">
		    	<div class="col">
				    <label for="filtrarTelefono">Telefono</label>
				   	<input type="text" id="filtrarTelefono" name="filtrarTelefono"></input>
				</div>
				<div class="col">
				   	<label for="filtrarFecha">F. Nacimi</label>
				   	<input type="date" id="filtrarFecha" name="filtrarFecha"></input>
			    </div>
			    <div class="col">
				   	<label for="filtrarGrupo">Grupo</label>
				   <select class="form-control" id="filtrarGrupo" name="filtrarGrupo">
       				  <option value="0">Elije un grupo</option>
        				 @foreach($grupos as $grupo)
          					 <option value="{{$grupo->id_grupo}}">{{$grupo->nombre_grupo}}</option>
         				 @endforeach
                    </select>
			    </div>
		   </div>
		   <div class="row">
				    <div class="col">
				   		<button class="btn btn-warning">Filtrar</button>
				   	</div>
				</div>
	    </form>
	</div>
	{{-- Tabla donde se muestran los datos de los alumnos. Aquí también se muestran los datos que surgen de filtrar la tabla de alumnos en la BD--}}
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Apellidos</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Correo Electronico</th>
	      <th scope="col">Telefono</th>
	      <th scope="col">Fecha de nacimiento</th>
	      <th scope="col">Grupo</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>

		@foreach($alumnos as $alumno)
			<tbody>
				<tr>
			      <th scope="row">{{$alumno->id}}</th>
			      <td>{{$alumno->apellidos}}</td>
			      <td>{{$alumno->nombre}}</td>
			      <td>{{$alumno->email}}</td>
			      <td>{{$alumno->telefono}}</td>
			      <td>{{$alumno->fecha_nacimiento}}</td>
			      <td><a href="#">{{$alumno->nombre_grupo}}</a></td>
			      <td>
			      	<span class="btn btn-success"><i class='fa fa-eye' title='Más información' ></i></span> 
			      	{{-- Botón que muestra u oculta el formulario en el que se actualizar el registro al que acompaña (Ver mActualizar.js)--}}
			      	<span class="btnEditar btn btn-info"><i  class='fas fa-pencil-alt' title='Editar'></i></span>
			      	
			      	{{-- Formulario que incluye el botón que hace que se borre el registro al que acompaña (ver borrar.js)--}}
			      	<form action="{{asset('/borrarAlumnos/'.$alumno->id)}}" class="borrarForm" method="post" style="display:inline"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>
			      	</form>
			      </td>		
	    		</tr>
	    		<tr class="actualizar">
	    			{{--Explicación en alumnos-actualizar.blade.php--}}
	    			<td colspan="8">@include('alumnos.actualizar-alumnos')</td>
	    			
	    		</tr>
		    </tbody>
		@endforeach

		</table>
	</div>
@endsection

@section('js')
	<script src="{{asset('js/mAniadir.js')}}"></script>
    <script src="{{asset('js/crear.js')}}"></script>
    <script src="{{asset('js/borrar.js')}}"></script>
    <script src="{{asset('js/mActualizar.js')}}"></script>
@endsection