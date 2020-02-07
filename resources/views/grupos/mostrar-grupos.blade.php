@extends('layouts.base')

@section('content')
	<!-- Cabecera de la pagina. Se usa para identificar donde estamos-->
	<div>
		<i class='fas fa-users' style='font-size:36px'></i> <h2 class=' d-inline-block align-middle mr-2'>GRUPOS
		<a href="#" class="btn btn-primary"><i class='fas fa-plus'></i>  Crear Grupo</a> </h2>
	</div>
	
   <!-- -->
   
	<!-- Generamos una tabla para visualizar los grupos y poder borrar o modificarlos -->
	<div>
	
   @include('grupos.crear-grupo')
   
   <form style="display:inline">
   	<label for="filtrarGrupos">Filtrar Grupos</label>
   	<input type="text" id="filtrarGrupos"></input>
   	<button>Filtrar</button>
   </form>

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
			      <td>
			      	<span><i class='fa fa-eye btn btn-success rounded text-center' title='Más información' ></i></span> 
			      	<span><i class='fas fa-pencil-alt btn btn-info rounded' title='Editar'></i></span>
			      	<form action="#" method="post" data-extra="#" style="display:inline"> 
						<button class="btn btn-danger" style="padding: 0; height: 30px; width: 30px; margin: 5px 2px;">
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