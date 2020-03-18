@extends('layouts.base')

@section('content')
  <div id="container" class="container-fluid">
  	<div>
  		<i class='iconos fas fa-user-tie' style='color: black'></i> <h2 class=' d-inline-block align-middle mr-2 col-10'>USUARIOS <a href="#" class="btn btn-primary"><i class='fas fa-plus' ></i>  Añadir Usuario</a></h2>
    </div>
   @include('usuarios.crear-usuarios')
    
	<div id="filtrar">
		<form style="display:inline">
	   	<h3>Filtrar Usuarios</h3>
	 	<label for="filtrarNombre">Nombre del Grupo</label>
	   	<input type="text" id="filtrarNombre"></input>
	   	<label for="filtrarApellidos">Apellidos</label>
	   	<input type="text" id="filtrarApellidos"></input>
	   	<label for="filtrarEmail">Email</label>
	   	<input type="text" id="filtrarEmail"></input>
	    <label for="filtrarTelefono">Telefono</label>
	   	<input type="text" id="filtrarTelefono"></input>
	   	<button class="btn btn-warning">Filtrar</button>
	   </form>
	</div>
		
	<div id="mostrar">
	
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellidos</th>
	      <th scope="col">Email</th>
	      <th scope="col">Telefono</th>
	      <th scope="col">Acciones</th>
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