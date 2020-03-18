@extends('layouts.base')

@section('content')
	<div>
		<h1><i class='fas fa-list' style='font-size:36px; color:black'></i> TEMAS</h1>
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
	    </tr>
	  </thead>
      @foreach($temas as $tema)
	   <tbody>
     		<tr>
			      <th scope="row">{{$tema->id}}</th>
			      <td>{{$tema->titulo}}  </td>
			      <td>{{$tema->descripcion}}</td>
			      <td>{{$tema->horas}}</td>    
	    	</tr>		 
		</tbody>
	  @endforeach
	  </table>	

	</div>
@endsection