@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	<div>
		<h1><i class='iconos fas fa-user-graduate'></i>ALUMNOS <a href="#" class="btn btn-primary"><i class='fas fa-plus'></i>  Añadir Alumno</a></h1>
	</div>
	 @include('alumnos.crear-alumnos')
	<div id="filtrar">
		<form style="display:inline">
	   	<h3>Filtrar alumos</h3>
	 	<label for="filtrarNombre">Nombre</label>
	   	<input type="text" id="filtrarNombre"></input>
	   	<label for="filtrarApellidos">Apellidos</label>
	   	<input type="text" id="filtrarApellidos"></input>
	   	<label for="filtrarEmail">Email</label>
	   	<input type="text" id="filtrarEmail"></input>
	    <label for="filtrarTelefono">Telefono</label>
	   	<input type="text" id="filtrarTelefono"></input>
	   	<br>
		<label for="filtrarTelefono">Fecha de Nacimiento</label>
	   	<input type="text" id="filtrarTelefono"></input>
	   	<label for="filtrarTelefono">Grupo</label>
	   	<input type="text" id="filtrarTelefono"></input>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>
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
			      	<span class="btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
			      	<form action="#" method="post" data-extra="#" style="display:inline"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>
			      	</form>
			      </td>		
	    		</tr>
		    </tbody>
		@endforeach

		</table>
	</div>
@endsection