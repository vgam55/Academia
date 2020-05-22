@extends('layouts.base')

@section('content')
<div id="container" class="container-fluid">
	{{-- Apartado en el que se incluye el titulo de la pagina y el botón para mostrar y ocultar el apartado donde se crea un nuevo registro (Ver mAniadir.js)--}}
	<div>
		<h1><i class='fas fa-list' style='font-size:36px; color:black'></i> TEMAS <a href="#"  class="btn btn-primary btnAniadir"><i class='fas fa-plus btnAniadir'></i>  Añadir Temas</a></h1>
	</div>
	
	@include('temas.crear-temas')
	{{-- Apartado con el formulario para filtrar los datos de la tabla Temas --}}
    <div id="filtrar">
		<form style="display:inline">
	   	<h3>Filtrar Temas</h3>
	   	<label for="filtrarTitulo">Titulo</label>
	   	<input type="text" id="filtrarTitulo"></input>
	   	<label for="filtrarDescripcion">Descripción</label>
	   	<input type="text" id="filtrarDescripcion"></input>
	    <label for="filtrarHoras">Horas</label>
	   	<input type="text" id="filtrarHoras"></input>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>


	<div>
	
	<table class="table">
	{{-- Tabla donde se muestran los datos de las clases. Aquí también se muestran los datos que surgen de filtrar la tabla de clases en la BD--}}
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Titulo</th>
	      <th scope="col">Descripción</th>
	      <th scope="col">Horas</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
      @foreach($temas as $tema)
	   <tbody>
     		<tr>
			      <th scope="row">{{$tema->id}}</th>
			      <td>{{$tema->titulo}}  </td>
			      <td>{{$tema->descripcion}}</td>
			      <td>{{$tema->horas}}</td>  
			      <td>
			      	<span class="btn btn-success"><i class='fa fa-eye' title='Más información' ></i></span> 
			      	{{-- Botón que muestra u oculta el formulario en el que se actualizar el registro al que acompaña (Ver mActualizar.js)--}}
			      	<span class="btnEditar btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
			      	{{-- Formulario que incluye el botón que hace que se borre el registro al que acompaña (ver borrar.js)--}}
			      	<form action="{{ url('/borrarTemas/'.$tema->id) }}" method="post" class="borrarForm"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>

			      	</form>
			      </td>
			      	<span class="btn btn-succes"><i class='iconos fas fa-list' title="Mostrar Temas"></i></span>  
	    	</tr>	
	    	<tr class="actualizar">
	    		{{--Explicación en temas-actualizar.blade.php--}}
	    		<td colspan="5">@include('temas.actualizar-temas')</td>
	    	</tr>	 
		</tbody>
	  @endforeach
	  </table>	

	</div>
</div>

@endsection

@section('js')
	<script src="{{asset('js/mAniadir.js')}}"></script>
	<script src="{{asset('js/crear.js')}}"></script>
    <script src="{{asset('js/borrar.js')}}"></script>
    <script src="{{asset('js/mActualizar.js')}}"></script>
@endsection