@extends('layouts.base')

@section('content')
	
	<div>
		<h1><i class='fas fa-chalkboard' style='font-size:36px'></i> PROFESORES <a href="#" class="btn btn-primary"><i class='fas fa-plus btnAniadir'></i>  Añadir profesor</a></h1>
	</div>
	
    @include('profesores.crear-profesores')
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

@section('js')
	<script src="{{asset('js/mAniadir.js')}}"></script>
@endsection