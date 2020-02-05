@extends('layouts.base')

@section('content')
	
	<div>
		<h3><i class='fas fa-user-tie' style='font-size:36px'></i>   USUARIOS</h3>
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
@endsection