@extends('layouts.base')

@section('content')
	<div>
		<h1><i class='fas fa-list' style='font-size:36px; color:black'></i> TEMAS <a href="#"  class="btn btn-primary btnAniadir"><i class='fas fa-plus btnAniadir'></i>  Añadir Temas</a></h1>
	</div>
	
	@include('temas.crear-temas')
	
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
			      	<span class="btn btn-info"><i class='fas fa-pencil-alt' title='Editar'></i></span>
			      	<form action="#" method="post" data-extra="#" style="display:inline"> 
						<button class="btn btn-danger" style="padding: 0; height: 40px; width: 40px; margin: 5px 2px;">
							 @csrf
                             @method('DELETE')
							<i class="far fa-trash-alt" title='Borrar registro'></i>
						</button>
			      	</form>
			      	<span class="btn btn-succes"><i class='iconos fas fa-list' title="Mostrar Temas"></i></span>  
	    	</tr>		 
		</tbody>
	  @endforeach
	  </table>	

	</div>
@endsection

@section('js')
	<script src="{{asset('js/mAniadir.js')}}"></script>
    <script src="{{asset('js/crear.js')}}"></script>
@endsection