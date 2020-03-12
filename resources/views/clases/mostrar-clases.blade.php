@extends('layouts.base')

@section('content')
	<div id="container" class="container-fluid">
		<div class="row">
		<h1><span class="icon-container col-2"><i class='iconos fas fa-chalkboard' style='font-size:36px'></i></span> <span class="col-10">CLASES</span></h1>
	</div>
	
	<div id="aniadir">
		<form style="display:inline">
		    <h3>Añadir Clase</h3>
		   	<label for="filtrarNombre">Nombre del Grupo</label>
		   	<input type="text" id="filtrarNombre"></input>
		   	<label for="filtrarApellidos">Profesor</label>
		   	<input type="text" id="filtrarApellidos"></input>
		   	<button class="btn btn-success">Añadir</button>
	    </form>
	</div>
	<div id="filtrar">
		<form style="display:inline">
	    <h3>Filtrar Clases</h3>
	 	 	<label for="filtrarNombre">Nombre del Grupo</label>
		   	<input type="text" id="filtrarNombre"></input>
		   	<label for="filtrarApellidos">Profesor</label>
		   	<input type="text" id="filtrarApellidos"></input>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>

	<div>	
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Profesor</th>
	      <th scope="col">Grupo</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
      @foreach($clases as $clase)
	   <tbody>
     		<tr>
			      <th scope="row">{{$clase->id}}</th>
			      <td>{{$clase->name}}  {{$clase->apellidos}}</td>
			      <td>{{$clase->nombre}}</td>	
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
 </div>
@endsection