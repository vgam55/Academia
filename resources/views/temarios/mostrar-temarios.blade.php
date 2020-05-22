@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	{{-- Apartado en el que se incluye el titulo de la pagina y el botón para mostrar y ocultar el apartado donde se crea un nuevo registro (Ver mAniadir.js)--}}
	<div class="row">
		<i class='iconos fas fa-book-reader' style="color: black"></i>  <h1>Temarios <button  class="btn btn-primary btnAniadir"><i class='fas fa-plus'></i>  Añadir temario</button></h1>
	</div>

	 @include('temarios.crear-temario')
	 {{-- Apartado con el formulario para filtrar los datos de la tabla temarios --}}
	<div id="filtrar">
		<form>
	   	<h3>Filtrar Temarios</h3>
	 	<label for="filtrarNombreTemario">Nombre</label>
	   	<input type="text" id="filtrarTemario"></input>
	   	<label for="filtrarTema">Tema</label>
	   	<input type="text" id="filtrarTema"></input>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>

	<table class="table">
	{{-- Tabla donde se muestran los datos de las clases. Aquí también se muestran los datos que surgen de filtrar la tabla de temarios en la BD--}}
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>

		@foreach($temarios as $temario)
			<tbody>
				<tr>
			      <th scope="row">{{$temario->id}}</th>
			      <td><a href="#">{{$temario->nombre_temario}}</a></td>
			      {{--<td><a href="#">{{$alumno->nombre_grupo}}</a></td>--}}
			      <td>
			      	<span class="btn btn-success"><i class='fa fa-eye' title='Más información' ></i></span> 
			      	{{-- Botón que muestra u oculta el formulario en el que se actualizar el registro al que acompaña (Ver mActualizar.js)--}}
			      	<span class="btnEditar btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
			      	{{-- Formulario que incluye el botón que hace que se borre el registro al que acompaña (ver borrar.js)--}}
			      	<form action="{{ url('/borrarTemarios/'.$temario->id) }}" method="post" class="borrarForm"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>
			      	</form>
			      	<span class="btn btn-succes"><i class='iconos fas fa-list' title="Mostrar Temas"></i></span>
			      </td>		
	    		</tr>
	    		<tr class="actualizar">
	    			{{--Explicación en temarios-actualizar.blade.php--}}
	    			<td colspan="3">@include('temarios.actualizar-temario')</td>
	    		</tr>
		    </tbody>
		@endforeach

		</table>
	</div>
@endsection

@section('js')
	<script src="{{asset('js/mAniadir.js')}}"></script>
	<script src="{{ asset('js/crear.js') }}"></script>
	<script src="{{ asset('js/borrar.js')}}"></script>
	<script src="{{ asset('js/mActualizar.js') }}"></script>
@endsection