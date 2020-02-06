@extends('layouts.base')

@section('content')
	<!-- Cabecera de la pagina. Se usa para identificar donde estamos-->
	<div>
		<i class='fas fa-users' style='font-size:36px'></i> <h2 class=' d-inline-block align-middle mr-2'>GRUPOS
		<a href="#" class="btn btn-primary"><i class='fas fa-plus'></i>  Crear Grupo</a> </h2>
	</div>
	

	<!-- Generamos una tabla para visualizar los grupos y poder borrar o modificarlos -->
	<div>
	
   @include('grupos.crear-grupo')


	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
      @foreach($grupos as $grupo)
	   <tbody>
     		<tr>
			      <th scope="row">{{$grupo->id}}</th>
			      <td>{{$grupo->nombre}}</td>
			      <td><img src=" {{ asset('borrar.png') }} "></td>			      
	    	</tr>		 
		</tbody>
	  @endforeach
	  </table>	

	</div>

@endsection