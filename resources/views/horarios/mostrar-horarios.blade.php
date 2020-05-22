@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	{{-- Apartado en el que se incluye el titulo de la pagina y el botón para mostrar y ocultar el apartado donde se crea un nuevo registro (Ver mAniadir.js)--}}
	<div>
		<h1><i class='iconos fas fa-book' style="color:black"></i></i>HORARIOS <button class="btn btn-primary btnAniadir"><i class='fas fa-plus btnAniadir' ></i>  Añadir Horarios</button></h1>
	</div>
	 @include('horarios.crear-horarios')

	 {{-- Apartado con el formulario para filtrar los datos de la tabla Clases --}}
	<div id="filtrar">
		<form style="display:inline">
			{{ csrf_field() }}
      		{{ method_field('POST') }}
	   	<h3>Filtrar Horarios</h3>
	 	<label for="filtrarNombreHorario">Nombre</label>
	   	<input type="text" id="filtrarNombreHorario"></input>
	   	<label for="filtrarHoraIni">Hora Inicio</label>
	   	<input type="text" id="filtrarHoraIni"></input>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>
	<table class="table">
	{{-- Tabla donde se muestran los datos de los alumnos. Aquí también se muestran los datos que surgen de filtrar la tabla de alumnos en la BD--}}
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Hora 1</th>
	      <th scope="col">Hora 2</th>
	      <th scope="col">Hora 3</th>
		  <th scope="col">Hora 4</th>
		  <th scope="col">Hora 5</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>

		@foreach($horarios as $horario)
			<tbody>
				<tr>
			      <th scope="row">{{$horario->id}}</th>
			      <td>{{$horario->nombre_horario}}</td>
			      <td>{{$horario->hora1}}</td>
			      <td>{{$horario->hora2}}</td>
			      <td>{{$horario->hora3}}</td>
			      <td>{{$horario->hora4}}</td>
			      <td>{{$horario->hora5}}</td>
			      
			      <td>
			      	<span class="btn btn-success"><i class='fa fa-eye' title='Más información' ></i></span> 
			      	{{-- Botón que muestra u oculta el formulario en el que se actualizar el registro al que acompaña (Ver mActualizar.js)--}}
			      	<span class="btnEditar btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
			      	{{-- Formulario que incluye el botón que hace que se borre el registro al que acompaña (ver borrar.js)--}}
			      	<form action="{{ url('/borrarHorarios/'.$horario->id) }}" class="borrarForm" method="post"  style="display:inline"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>
			      	</form>
			      	<span class="btn btn-succes"><i class='iconos fas fa-list' title="Mostrar Horarios"></i></span>
			      </td>		
	    		</tr>
	    		{{--Explicación en horarios-actualizar.blade.php--}}
	    		<tr class="actualizar">
	    			<td colspan="8">@include('horarios.actualizar-horarios')</td>
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