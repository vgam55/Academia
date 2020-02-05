@extends('layouts.base')

@section('content')
	<div>
		<h1><i class='fas fa-list' style='font-size:36px'></i> TEMAS</h1>
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