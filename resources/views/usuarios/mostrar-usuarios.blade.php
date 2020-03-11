@extends('layouts.base')

@section('content')
  <div id="container" class="container-fluid">
  	<div>
  		<i class='iconos fas fa-user-tie '></i> <h2 class=' d-inline-block align-middle mr-2 col-10'>USUARIOS <a href="#" class="btn btn-primary"><i class='fas fa-plus'></i>  Añadir Usuario</a></h2>
    </div>
	<div>
		
	</div>
		<form style="display:inline">
	   	<label for="filtrarNombre">Filtrar Grupos</label>
	   	<input type="text" id="filtrarNombre"></input>
	   	<label for="filtrarApellidos">Apellidos</label>
	   	<input type="text" id="filtrarApellidos"></input>
	   	<label for="filtrarEmail">Email</label>
	   	<input type="text" id="filtrarEmail"></input>
	    <label for="filtrarTelefono">Telefono</label>
	   	<input type="text" id="filtrarTelefono"></input>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	<div>
	
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellidos</th>
	      <th scope="col">Email</th>
	      <th scope="col">Telefono</th>
	    </tr>
	  </thead>
      @foreach($usuarios as $usuario)
	  <tbody>
     	<tr>
		   <th scope="row">{{$usuario->id}}</th>
		   <td>{{$usuario->name}}  </td>
		   <td>{{$usuario->apellidos}}</td>
		   <td>{{$usuario->email}}</td>
		   <td>{{$usuario->telephone}}</td>		      
	    </tr>		 
		</tbody>
	  @endforeach
	  </table>	

	</div>
</div>
@endsection