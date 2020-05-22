@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	{{-- Apartado en el que se incluye el titulo de la pagina y el botón para mostrar y ocultar el apartado donde se crea un nuevo registro (Ver mAniadir.js)--}}
	<div>
		<h1><i class='fas fa-chalkboard' style='font-size:36px'></i> PROFESORES <button class="btn btn-primary btnAniadir"><i class='fas fa-plus btnAniadir'></i>  Añadir profesor</button></h1>
	</div>
	
    @include('profesores.crear-profesores')
    {{-- Apartado con el formulario para filtrar los datos de la tabla Profesores --}}
	<div id="filtrar">
		<form style="display:inline">
	   	<h3>Filtrar Profesores</h3>
	 	<label for="filtrarNombre">Nombre</label>
	   	<input type="text" id="filtrarNombre"></input>
	   	<label for="filtrarApellidos">Apellidos</label>
	   	<input type="text" id="filtrarApellidos"></input>
	   	<label for="filtrarEmail">Email</label>
	   	<input type="text" id="filtrarEmail"></input>
	    <label for="filtrarTelefono">Telefono</label>
	   	<input type="text" id="filtrarTelefono"></input>
	   	<label for="filtrarTitulo">Titulo</label>
		<input type="text" id="filtrarTitulo"></form>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>
	<div>
	

	<table class="table">
	{{-- Tabla donde se muestran los datos de los. Aquí también se muestran los datos que surgen de filtrar la tabla de profesores en la BD--}}
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellidos</th>
	      <th scope="col">Email</th>
	      <th scope="col">Telefono</th>
	      <th scope="col">Titulo</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
      @foreach($profesores as $profesor)
	   <tbody>
     		<tr>
			      <th scope="row">{{$profesor->id}}</th>
			      <td>{{$profesor->name}}  </td>
			      <td>{{$profesor->apellidos}}</td>
			      <td>{{$profesor->email}}</td>
			      <td>{{$profesor->telephone}}</td>
			      <td>{{$profesor->titulo}}</td>	
			      <td>
			      	<span class="btn btn-success"><i class='fa fa-eye' title='Más información' ></i></span> 
			      	{{-- Botón que muestra u oculta el formulario en el que se actualizar el registro al que acompaña (Ver mActualizar.js)--}}
			      	<span class="btnEditar btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
					{{-- Formulario que incluye el botón que hace que se borre el registro al que acompaña (ver borrar.js)--}}
			      	<form action="{{url('/borrarProfesores/'.$profesor->id)}}" method="post" class="borrarForm"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>
			      	</form>
			      </td>				      
	    	</tr>
	    	<tr class="actualizar">
	    		{{--Explicación en clase-actualizar.blade.php--}}
	    		<td colspan="7">@include('profesores.actualizar-profesores')</td>
	    	</tr>	 
		</tbody>
	  @endforeach
	  </table>	
	</div>
</div>

@endsection

@section('js')
	<script src="{{asset('js/mAniadir.js') }}"></script>
	<script src="{{ asset('js/crear.js') }}"></script>
	<script src="{{ asset('js/borrar.js')}}"></script>
	<script src="{{ asset('js/mActualizar.js')}}"></script>
@endsection