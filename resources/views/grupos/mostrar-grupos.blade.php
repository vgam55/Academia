@extends('layouts.base')

@section('content')
	<!-- Cabecera de la pagina. Se usa para identificar donde estamos-->
	<div id="container" class="container-fluid">
		<div>
		<i class='iconos fas fa-users' style="color:black"></i><h2 class=' d-inline-block align-middle mr-2' >GRUPOS </h2>
		<button class="btn btn-primary btnAniadir"><i class='fas fa-plus'></i>  Crear Grupo</button>
		<
   <!-- -->
    
	<!-- Generamos una tabla para visualizar los grupos y poder borrar o modificarlos -->
	
	@include('grupos.crear-grupos')
   
   <form style="display:inline">  
		 <h3>Filtrar Grupo</h3>
		 <label for="filtrarNombre">Nombre del Grupo</label>
		 <input type="text" id="Nombre"></input>
		 <label for="filtrarFecha">Año</label>
		 <input type="date" id="filtrarTecha"></input>    
   	     <button class="btn btn-warning">Filtrar</button>
   </form>
   

	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scopoe="col">Fecha</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
      @foreach($grupos as $grupo)
	   <tbody>
     		<tr>
			      <th scope="row">{{$grupo->id}}</th>
			      <td><a href="#">{{$grupo->nombre_grupo}}</a></td>
			      <td>{{$grupo->anio}}</td>
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