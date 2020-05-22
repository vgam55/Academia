@extends('layouts.base')

@section('content')
	<div id="container" class="container-fluid">
	{{-- Apartado en el que se incluye el titulo de la pagina y el botón para mostrar y ocultar el apartado donde se crea un nuevo registro (Ver mAniadir.js)--}}
	  <div class="row">
		<i class='iconos fas fa-chalkboard' style='font-size:36px; color:black'></i><h1>CLASES <button  class="btn btn-primary btnAniadir"><i class='fas fa-plus'></i>  Añadir Clases</button></span></h1>
	  </div>
	
	@include('clases.crear-clases')
	{{-- Apartado con el formulario para filtrar los datos de la tabla Clases --}}
	<div id="filtrar">
		<form style="display:inline">
	    <h3>Filtrar Clases</h3>
	 	 	<label for="filtrarGrupo">Nombre de la Clase</label>
		   	<input type="text" id="filtrarGrupo"></input>
		   	<label for="filtrarProfesor">Profesor</label>
		   	<input type="text" id="filtrarProfesor"></input>
		   	<label for="filtrarGrupo">Grupo</label>
		   	<input type="text" id="filtrarGrupo"></input>
	   		<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>

	<div>	
	<table class="table">
	{{-- Tabla donde se muestran los datos de las clases. Aquí también se muestran los datos que surgen de filtrar la tabla de clases en la BD--}}
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Clase</th>
	      <th scope="col">Profesor</th>
	      <th scope="col">Grupo</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
      @foreach($clases as $clase)
	   <tbody>
	   		<tr id="trFila">
			      <th scope="row">{{$clase->id}}</th>
			      <td>{{$clase->nombre_clase}}</td>
			      <td>{{$clase->name}}  {{$clase->apellidos}}</td>
			      <td><a href="#">{{$clase->nombre_grupo}}</a></td>	
			      <td id="tdAcciones">
			      	<span class="btn btn-success"><i class='fa fa-eye' title='Más información' ></i></span> 
			      	{{-- Botón que muestra u oculta el formulario en el que se actualizar el registro al que acompaña (Ver mActualizar.js)--}}
			      	<span class="btnEditar btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
			      	{{-- Formulario que incluye el botón que hace que se borre el registro al que acompaña (ver borrar.js)--}}
			      	<form action="{{asset('/borrarClases/'.$clase->id)}}" class="borrarForm" method="post"> 
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
	    		<td colspan="5" >
	    			@include('clases.actualizar-clase')
	    		</td>
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